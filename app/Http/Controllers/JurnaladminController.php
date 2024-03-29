<?php

namespace App\Http\Controllers;

use App\Models\jurnaladmin;
use App\Models\jurnalsiswa;
use App\Http\Requests\StorejurnaladminRequest;
use App\Http\Requests\UpdatejurnaladminRequest;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use DB;
class JurnaladminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $item = jurnalsiswa::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $item = jurnalsiswa::where('nama', 'LIKE', '%' . $keyword . '%')->orWhere('sekolah', 'LIKE', '%' . $keyword . '%')->paginate(3);
            return view('jurnal_admin.index', compact('item'));
        }

        $item = jurnalsiswa::latest()->paginate(3);
        return view('jurnal_admin.index',compact( 'item'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $item = jurnalSiswa::where('nama', 'LIKE', $request ->serch)->GET();
        $siswa = $request->serch;

        $mengisi_jan = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $mengisi_feb = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $mengisi_mar = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $mengisi_apr = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $mengisi_mei = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $mengisi_jun = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $mengisi_jul = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $mengisi_aug = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $mengisi_sep = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $mengisi_okt = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $mengisi_nov = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $mengisi_des = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();


        $tdk_mengisi_jan = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $tdk_mengisi_feb = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $tdk_mengisi_mar = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $tdk_mengisi_apr = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $tdk_mengisi_mei = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $tdk_mengisi_jun = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $tdk_mengisi_jul = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $tdk_mengisi_aug = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $tdk_mengisi_sep = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $tdk_mengisi_okt = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $tdk_mengisi_nov = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $tdk_mengisi_des = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();

        return view('jurnal_admin.grafik', compact('siswa','item','mengisi_jan','mengisi_feb','mengisi_mar','mengisi_apr','mengisi_mei','mengisi_jun','mengisi_jul','mengisi_aug','mengisi_sep','mengisi_okt','mengisi_nov','mengisi_des','tdk_mengisi_jan','tdk_mengisi_feb','tdk_mengisi_mar','tdk_mengisi_apr','tdk_mengisi_mei','tdk_mengisi_jun','tdk_mengisi_jul','tdk_mengisi_aug','tdk_mengisi_sep','tdk_mengisi_nov','tdk_mengisi_okt','tdk_mengisi_nov','tdk_mengisi_des'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorejurnaladminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejurnaladminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jurnaladmin  $jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $hasil = $request->input('serch');
        // $item = jurnalsiswa::where('nama', 'like', '%'.$hasil.'%')->get();
        // return view('jurnal_admin.grafik',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jurnaladmin  $jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function edit(jurnaladmin $jurnaladmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejurnaladminRequest  $request
     * @param  \App\Models\jurnaladmin  $jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejurnaladminRequest $request, jurnaladmin $jurnaladmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jurnaladmin  $jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(jurnaladmin $jurnaladmin)
    {
        //
    }
    public function jurnal_admin_pdf()  {
        set_time_limit(0);
        $data = JurnalSiswa::all();
        $pdf = Pdf::loadView('desain_pdf.jurnal', ['data' => $data]);
        return $pdf->download('jurnal_siswa.pdf');
    }
    public function jurnal_admin_pdf_grafik(Request $request)  {
        set_time_limit(0);
        $data = JurnalSiswa::where('nama', $request->nama);
        $pdf = Pdf::loadView('desain_pdf.jurnal', ['data' => $data]);
        return $pdf->download('jurnal_siswa.pdf');
    }
    public function admin_docx()
{
    // Mendapatkan data dari database (contoh menggunakan model User)
    $users = JurnalSiswa::all();

    // Membuat objek PhpWord
    $phpWord = new PhpWord();

    // Membuat halaman baru
    $section = $phpWord->addSection();

    // Menambahkan data dari database ke dokumen
    foreach ($users as $user) {
        $section->addText($user->nama);
        $section->addText($user->tanggal);
        $section->addText($user->sekolah);
        $section->addText($user->kegiatan);
        // Tambahkan data lain yang Anda butuhkan
        $section->addText("--------------------"); // Pemisah antara setiap entri
    }

    // Menyimpan dokumen sebagai file .docx
    $filename = "jurnal_siswa.docx";
    $path = storage_path('app/public/image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
    $phpWord->save($path);

    // Mengembalikan file dokumen untuk diunduh
    return response()->download($path, $filename);
}
    public function grafik_docx(Request $request)
{
    // Mendapatkan data dari database (contoh menggunakan model User)
    $users = JurnalSiswa::where('nama', $request->nama);

    // Membuat objek PhpWord
    $phpWord = new PhpWord();

    // Membuat halaman baru
    $section = $phpWord->addSection();

    // Menambahkan data dari database ke dokumen
    foreach ($users as $user) {
        $section->addText($user->nama);
        $section->addText($user->tanggal);
        $section->addText($user->sekolah);
        $section->addText($user->kegiatan);
        // Tambahkan data lain yang Anda butuhkan
        $section->addText("--------------------"); // Pemisah antara setiap entri
    }

    // Menyimpan dokumen sebagai file .docx
    $filename = "jurnal_siswa.docx";
    $path = storage_path('app/public/image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
    $phpWord->save($path);

    // Mengembalikan file dokumen untuk diunduh
    return response()->download($path, $filename);
}
}
