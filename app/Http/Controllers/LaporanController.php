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
        return view('laporan', [
            'laporan' => Laporan::all(),
            'kategori' => Kategori::all(),
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
            'dokumentasi' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if kategori is 6 (Lain-lain)
        if ($request->kategori == 6) {
            $this->validate($request, [
                'kategori_lain' => 'required|string',
            ]);
        }

        // Change the filename to current timestamp_lokasi_user.name before store to db
        $filePath = $request->file('dokumentasi')
            ->storeAs('dokumentasi', time() . '_' . $request->lokasi . '_' . auth()->user()->name . '.' . $request->dokumentasi->extension(), 'public');

        // Create new Laporan
        $laporan = Laporan::create([
            'pelapor' => auth()->user()->id,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'kategori' => $request->kategori,
            'is_kategori_lain' => $request->kategori == 6 ? true : false,
            'kategori_lain' => $request->kategori == 6 ? $request->kategori_lain : null,
            'deskripsi' => $request->deskripsi,
            'dokumentasi' => $filePath,
        ]);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
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
