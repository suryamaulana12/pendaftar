<?php

namespace App\Http\Controllers;

use App\Models\LaporanSiswa;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\StoreLaporanSiswaRequest;
use App\Http\Requests\UpdateLaporanSiswaRequest;

class LaporanSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = LaporanSiswa::where('status', 'menunggu')->get();
        $tolak = LaporanSiswa::where('status', 'tolak')->get();
        $terima = LaporanSiswa::where('status', 'terima')->get();
        return view('laporansiswa.index', compact('siswa','terima','tolak'));
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
     * @param  \App\Http\Requests\StoreLaporanSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'bukti' => 'required',
        ]);

        $user = Auth::user();
        $tanggal = date('d F Y'); // Ubah format tanggal menjadi "tanggal bulan tahun"
        $image = $request->file('bukti');
        $image->storeAs('public/laporansiswa', $image->hashName());
        LaporanSiswa::create([
            'name' => $user->name,
            'tanggal' => $tanggal,
            'nama' => $request->nama,
            'status' => 'menunggu',
            'deskripsi' => $request->deskripsi,
            'bukti' => $image->hashName(),
        ]);
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanSiswa  $laporanSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanSiswa $laporanSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanSiswa  $laporanSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanSiswa $laporanSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanSiswaRequest  $request
     * @param  \App\Models\LaporanSiswa  $laporanSiswa
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request,LaporanSiswa $laporanSiswa, $id)
     {
            $izin = LaporanSiswa::findOrFail($id);
            if ($izin->status === 'menunggu') {
                $izin->status = 'terima';
                $izin->save();
            }

            return redirect()->back();
     }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanSiswa  $laporanSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanSiswa $laporanSiswa , $id)
    {
        $izin = LaporanSiswa::findOrFail($id);
        if ($izin->status === 'menunggu') {
            $izin->status = 'tolak';
            $izin->save();
        }
        return redirect()->back();
    }
}
