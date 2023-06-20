<?php

namespace App\Http\Controllers;

use App\Models\SiswaAlumni;
use App\Http\Requests\StoreSiswaAlumniRequest;
use App\Http\Requests\UpdateSiswaAlumniRequest;

class SiswaAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumni_admin.index');
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
     * @param  \App\Http\Requests\StoreSiswaAlumniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiswaAlumniRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaAlumni $siswaAlumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaAlumni $siswaAlumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaAlumniRequest  $request
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiswaAlumniRequest $request, SiswaAlumni $siswaAlumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaAlumni $siswaAlumni)
    {
        //
    }
}