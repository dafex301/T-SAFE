<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Http\Requests\StoreAsetRequest;
use App\Http\Requests\UpdateAsetRequest;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.aset.index', [
            'aset' => Aset::orderBy('created_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAsetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsetRequest $request)
    {
        $aset = Aset::create([
            'nomor' => $request->nomor,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/admin/aset')->with('success', "Aset successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function show(Aset $aset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function edit(Aset $aset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAsetRequest  $request
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAsetRequest $request, Aset $aset, String $id)
    {
        $aset = Aset::where('nomor', $id)->first();

        if (!$aset) {
            return redirect('/admin/aset')->with('error', "Aset tidak ditemukan.");
        }


        $aset->update($request->validated());


        return redirect('/admin/aset')->with('success', "Aset successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aset $aset, String $id)
    {
        $aset = Aset::where('nomor', $id)->first();

        if (!$aset) {
            return redirect('/admin/aset')->with('error', "Aset tidak ditemukan.");
        }

        $aset->delete();

        return redirect('/admin/aset')->with('success', "Aset successfully deleted.");
    }
}
