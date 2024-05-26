<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreK3Request;
use App\Http\Requests\UpdateK3Request;
use App\Models\K3;

class K3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('k3', [
            // 'k3' => K3::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('k3', [
            // 'k3' => K3::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreK3Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreK3Request $request)
    {
        // Create K3
        $k3 = K3::create([
            'name' => $request->name,
        ]);

        return redirect('/k3')->with('success', "K3 successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\K3  $k3
     * @return \Illuminate\Http\Response
     */
    public function show(K3 $k3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\K3  $k3
     * @return \Illuminate\Http\Response
     */
    public function edit(K3 $k3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateK3Request  $request
     * @param  \App\Models\K3  $k3
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateK3Request $request, K3 $k3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\K3  $k3
     * @return \Illuminate\Http\Response
     */
    public function destroy(K3 $k3)
    {
        //
    }
}
