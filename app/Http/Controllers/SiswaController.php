<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\LaporanSiswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Mail\Banned;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $today = date('Y-m-d');
        Siswa::whereDate('magang_akhir', '<=', $today)->update(['role' => 'alumni', 'status' => 'lulus']);
        $siswas = Siswa::where('role', 'siswa')->get();

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $siswas = Siswa::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('jurusan', 'LIKE', '%' . $keyword . '%')->paginate(3);
            return view('siswa_admin.index', compact('siswas'));
        }

        $aprovals = Siswa::latest()->paginate(3);

        return view('siswa_admin.index', compact('siswas'));
    }


    public function siswamagang_siswa()
    {
        $siswas = Siswa::all();
        return view('siswamagang_siswa.index    ', compact('siswas'));
    }
    public function view()
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
        return view('Siswa_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa, $id)
    {
        $siswa = Siswa::find($id);
        // dd($siswa);
        return view('Siswa_admin.detail',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaRequest  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
    public function banned(Request $request, $id) {
        // dd($id);
        // dd($request->all());
        $alasan = $request->alasan;
        $siswa = Siswa::find($id);
        $email = $siswa->email;
        $nama = $siswa->name;
        $data = [
            'alasan' => $alasan,
            'nama' => $nama,
        ];
        Mail::to($email)->send(new Banned($data));
        $siswa->update([
            'role' => 'banned',
        ]);
        User::where('name', $siswa->name)->update(['role' => 'banned']);
        return back()->with('success', 'Berhasil banned');
    }
}
