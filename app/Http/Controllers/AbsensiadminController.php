<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\absensiadmin;
use App\Models\ApprovalIzin;
use App\Http\Requests\StoreabsensiadminRequest;
use App\Http\Requests\UpdateabsensiadminRequest;
use Auth;

class AbsensiadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terima = ApprovalIzin::where('status', 'terimaabsen')
        ->get();
        return view('absensi_admin.index', compact('terima'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $terima = ApprovalIzin::where('nama', 'LIKE', $request ->serch)->GET();
        $Hadir_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $Hadir_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $Hadir_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $Hadir_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $Hadir_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $Hadir_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $Hadir_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $Hadir_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $Hadir_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $Hadir_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $Hadir_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $Hadir_des = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();


        $Alfa_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $Alfa_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $Alfa_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $Alfa_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $Alfa_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $Alfa_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $Alfa_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $Alfa_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $Alfa_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $Alfa_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $Alfa_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $Alfa_des = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();

        
        $Alfa_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $Alfa_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $Alfa_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $Alfa_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $Alfa_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $Alfa_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $Alfa_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $Alfa_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $Alfa_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $Alfa_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $Alfa_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $Alfa_des = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();

        return view('jurnal_admin.grafik', compact('item','Hadir_jan','Hadir_feb','Hadir_mar','Hadir_apr','Hadir_mei','Hadir_jun','Hadir_jul','Hadir_aug','Hadir_sep','Hadir_okt','Hadir_nov','Hadir_des','Alfa_jan','Alfa_feb','Alfa_mar','Alfa_apr','Alfa_mei','Alfa_jun','Alfa_jul','Alfa_aug','Alfa_sep','Alfa_nov','Alfa_okt','Alfa_nov','Alfa_des'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreabsensiadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'dari' => 'required',
            'sampai' => 'required',
            'keterangan'=> 'required',
            'deskripsi' => 'required',
            'bukti' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);
        $image = $request->file('bukti');
        $image->storeAs('public/bukti_izin', $image->hashName());
       
    
    ApprovalIzin::create([
            'nama' => $request->nama,   
            'sekolah' => $request->sekolah,
            'email' => $request->email,
            'dari' => $request->dari,
            'sampai' => $request->sampai,
            'keterangan' => $request->keterangan,
            'deskripsi' => $request->deskripsi,
            'status' => 'menunggu',
            'bukti' => $image->hashName()
        ]);
        // Mail::to($request->email)->send(new dataizinEmail($approvalIzin));
        return redirect()->route('absensi_siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function show(absensiadmin $absensiadmin)
    {
        return view('absensi_admin.grafik');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(absensiadmin $absensiadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateabsensiadminRequest  $request
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateabsensiadminRequest $request, absensiadmin $absensiadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(absensiadmin $absensiadmin)
    {
        //
    }
}
