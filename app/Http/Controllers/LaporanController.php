<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Kategori;
use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = auth()->user()->Role->name;

        $laporan = null;

        if ($role == 'Admin') {
            $laporan = Laporan::where('completed', false)->get();
        } else if ($role == 'Staff') {
            $laporan = Laporan::where('pelapor', auth()->user()->id)->get();
        } else if ($role == 'PIC') {
            $laporan = Laporan::where('pic_checked', false)->get();
        } else if ($role == 'BM') {
            $laporan = Laporan::where('pic_checked', true)->where('branch_manager_approval', false)->where('completed', false)->get();
        } else if ($role == "DPnP") {
            $laporan = Laporan::where('branch_manager_approval', true)->where('completed', false)->get();
        }

        return view('laporan', [
            'laporan' => $laporan,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        return view('history', [
            'laporan' => Laporan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return view lapor with kategori data
        return view('lapor', [
            'kategori' => Kategori::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLaporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanRequest $request)
    {
        $this->validate($request, [
            'tanggal' => 'required|date',
            'lokasi' => 'required|string',
            'kategori' => 'required',
            'deskripsi' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if kategori is 6 (Lain-lain)
        if ($request->kategori == 6) {
            $this->validate($request, [
                'kategori_lain' => 'required|string',
            ]);
        }

        // Change the filename to current timestamp_lokasi_user.name before store to db
        $filePath = $request->file('image')
            ->storeAs('image', time() . '_' . $request->lokasi . '_' . auth()->user()->name . '.' . $request->image->extension(), 'public');

        // Create new Laporan
        $laporan = Laporan::create([
            'pelapor' => auth()->user()->id,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'kategori' => $request->kategori,
            'is_kategori_lain' => $request->kategori == 999 ? true : false,
            'kategori_lain' => $request->kategori == 999 ? $request->kategori_lain : null,
            'deskripsi' => $request->deskripsi,
            'image' => $filePath,
        ]);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        try {

            $role = auth()->user()->Role->name;
            $laporan = Laporan::find($id);

            if (!$laporan->completed && $role == 'Staff') {
                throw new \Throwable();
            }

            return view('verifikasi', [
                'laporan' => $laporan,
                'kategori' => Kategori::all()
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('laporan.index')->with('error', 'Anda tidak dapat mengakses laporan ini!');
        }
    }

    /**
     * Verify the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanRequest  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function verifikasi(UpdateLaporanRequest $request, String $id)
    {
        $this->validate($request, [
            'lokasi' => 'required|string',
            'kategori' => 'required',
            'deskripsi' => 'required|string',
            'immediate_action' => 'required|string',
            'prevention' => 'required|string',
            'completed_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if kategori is 6 (Lain-lain)
        if ($request->kategori == 6) {
            $this->validate($request, [
                'kategori_lain' => 'required|string',
            ]);
        }

        // Change the filename to current timestamp_lokasi_user.name before store to db
        $filePath = $request->file('completed_image')
            ->storeAs('completed_image', time() . '_' . $request->lokasi . '_' . auth()->user()->name . '.' . $request->completed_image->extension(), 'public');

        // Create new Laporan
        $laporan = Laporan::find($id);
        $laporan->lokasi = $request->lokasi;
        $laporan->kategori = $request->kategori;
        $laporan->is_kategori_lain = $request->kategori == 6 ? true : false;
        $laporan->kategori_lain = $request->kategori == 6 ? $request->kategori_lain : null;
        $laporan->deskripsi = $request->deskripsi;
        $laporan->immediate_action = $request->immediate_action;
        $laporan->prevention = $request->prevention;

        if (auth()->user()->Role->name === 'PIC') {
            $laporan->pic = auth()->user()->id;
            $laporan->pic_checked = true;
            $laporan->pic_checked_at = now();
        }

        $laporan->completed = true;
        $laporan->completed_at = now();
        $laporan->completed_by = auth()->user()->id;
        $laporan->completed_image = $filePath;

        $laporan->save();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diubah!');
    }

    /**
     * Follow up the specified resource from PIC to DPP.
     *
     * @param  \App\Http\Requests\UpdateLaporanRequest  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function tindaklanjut(UpdateLaporanRequest $request, String $id)
    {
        $this->validate($request, [
            'lokasi' => 'required|string',
            'kategori' => 'required',
            'deskripsi' => 'required|string',
            'immediate_action' => 'nullable|string',
            'prevention' => 'nullable|string',
        ]);

        // Check if kategori is 999 (Lain-lain)
        if ($request->kategori == 999) {
            $this->validate($request, [
                'kategori_lain' => 'required|string',
            ]);
        }


        $laporan = Laporan::find($id);
        $laporan->lokasi = $request->lokasi;
        $laporan->kategori = $request->kategori;
        $laporan->is_kategori_lain = $request->kategori == 6 ? true : false;
        $laporan->kategori_lain = $request->kategori == 6 ? $request->kategori_lain : null;
        $laporan->deskripsi = $request->deskripsi;
        $laporan->immediate_action = $request->immediate_action;
        $laporan->prevention = $request->prevention;
        $laporan->pic = auth()->user()->id;
        $laporan->pic_checked = true;
        $laporan->pic_checked_at = now();

        $laporan->save();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil ditindaklanjuti!');
    }

    public function approve(String $id)
    {
        $laporan = Laporan::find($id);
        $laporan->branch_manager = auth()->user()->id;
        $laporan->branch_manager_approval = true;
        $laporan->branch_manager_approval_at = now();

        $laporan->save();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diapprove!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanRequest  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanRequest $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
