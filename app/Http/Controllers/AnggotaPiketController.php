<?php

namespace App\Http\Controllers;

use App\Models\anggota_piket;
use App\Http\Requests\Storeanggota_piketRequest;
use App\Http\Requests\Updateanggota_piketRequest;

class AnggotaPiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storeanggota_piketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeanggota_piketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anggota_piket  $anggota_piket
     * @return \Illuminate\Http\Response
     */
    public function show(anggota_piket $anggota_piket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anggota_piket  $anggota_piket
     * @return \Illuminate\Http\Response
     */
    public function edit(anggota_piket $anggota_piket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateanggota_piketRequest  $request
     * @param  \App\Models\anggota_piket  $anggota_piket
     * @return \Illuminate\Http\Response
     */
    public function update(Updateanggota_piketRequest $request, anggota_piket $anggota_piket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anggota_piket  $anggota_piket
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggota_piket $anggota_piket)
    {
        //
    }
}
