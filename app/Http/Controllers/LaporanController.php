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
        $user = auth()->user();

        $laporan = Laporan::where('pelapor', $user->id)->orderBy('updated_at', 'desc')->get();

        return view('laporan', [
            'laporan' => $laporan,
        ]);
    }

    /**
     * Display a listing of the resource by PIC.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkPIC()
    {
        $user = auth()->user();

        $laporan = Laporan::where('pic_checked', false)
            ->where('cabang', $user->cabang)
            ->orderBy('updated_at', 'desc')->get();


        return view('laporan', [
            'laporan' => $laporan,
        ]);
    }

    /**
     * Display a listing of the resource by Branch Manager.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkBM()
    {
        $user = auth()->user();

        $laporan = Laporan::where('pic_checked', true)
            ->where('branch_manager_checked', false)
            ->where('cabang', $user->cabang)
            ->orderBy('updated_at', 'desc')->get();

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
        $user = auth()->user();
        $role = $user->Role->name;

        if ($role == 'DPnP') {
            $laporan = Laporan::orderBy('updated_at', 'desc')->get();
        } else {
            $laporan = Laporan::orderBy('updated_at', 'desc')
                ->where('cabang', $user->cabang)
                ->get();
        }
        return view('history', [
            'laporan' => $laporan
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
        if ($request->kategori == '0') {
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
            'cabang' => auth()->user()->cabang,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'kategori' => $request->kategori,
            'kategori_lain' => $request->kategori == 0 ? $request->kategori_lain : null,
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

        // Check if kategori is 0 (Lain-lain)
        if ($request->kategori == '0') {
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
        $laporan->kategori_lain = $request->kategori == 0 ? $request->kategori_lain : null;
        $laporan->deskripsi = $request->deskripsi;
        $laporan->immediate_action = $request->immediate_action;
        $laporan->prevention = $request->prevention;

        if (auth()->user()->Role->name === 'PIC') {
            $laporan->pic = auth()->user()->id;
            $laporan->pic_checked = true;
            $laporan->pic_checked_at = now();
        }

        $laporan->completed = true;
        $laporan->dpnp_checked_at = now();
        $laporan->dpnp = auth()->user()->id;
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

        // Check if kategori is 0 (Lain-lain)
        if ($request->kategori == 0) {
            $this->validate($request, [
                'kategori_lain' => 'required|string',
            ]);
        }


        $laporan = Laporan::find($id);
        $laporan->lokasi = $request->lokasi;
        $laporan->kategori = $request->kategori;
        $laporan->kategori_lain = $request->kategori == 0 ? $request->kategori_lain : null;
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
        $laporan->branch_manager_checked = true;
        $laporan->branch_manager_checked_at = now();

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
