<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisObat;
use PDF;
use App\Http\Controllers\Controller;
use App\Imports\DataJenisObat2;
use App\Exports\DataJenisObat;
use Session;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
use App\Http\Requests\UpdateJenisObat;
class JenisObatController extends Controller
{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
      $jenis =\App\JenisObat::all();
        return view('jenisobat.index',['jenis'=>$jenis]);
    }

        public function create2()
    {
            return view('/admincrud/tambah_datajenosobat');
    }

            public function store2(Request $request)
    {
          $rules = [
            'nama_jenis' => 'required|min:3|unique:tbl_jenis,nama_jenis',
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'min:3' => ':attribute terlalu pendek',
            'unique' => ':attribute sudah ada di database'
        ];

        $validasi = Validator::make($request->all(), $rules, $message);

        if ($validasi->fails()) {

            return redirect()->route('jenisobat.create')->withErrors(
                $validasi->errors()
            )->withInput($request->all());

        } else {

            $insert = JenisObat::create([
                'id' => $request->id,
                'kode_jenis' => $request->kode_jenis,
                'nama_jenis' => $request->nama_jenis,
                'description' => $request->description,
                'aktif_jenis' => $request->aktif_jenis,
                'harga_jual_obat' => $request->harga_jual_obat
                
            ]);

            if ($insert) {
                return redirect()->route('jenisobat.index')->with('success', 'Berhasil menambah kategori.');
            } else{
                return redirect()->route('jenisobat.index')->with('error', 'Gagal menambah data kategori.');

        }
        // \App\JenisObat::create($request->all());
        // return redirect('/jenis')->with('sukses','Data berhasil ditambah');
    }
    }

        public function edit2($id)
    {
        $jenis= JenisObat::find($id);
        return view('/admincrud/edit_jenis',['jenis'=>$jenis]);
    }

          public function update2(Request $request, $id)
    {
        $jenis= JenisObat::find($id);
        $jenis->update($request->all());
        return redirect('/jenis')->with('sukses','Data berhasil diupdate');
    }

         public function hapus($id)
    {
          $jenis = JenisObat::find($id);
          $jenis->delete();
     
          return redirect('/jenisobat/index');
    }

           public function cetak_pdf()
    {
        $jenis3 = JenisObat::all();
 
        $pdf = PDF::loadview('admincrud/data_jenis_obat',['jenis3'=>$jenis3]);
        return $pdf->download('laporan-data-jenis-obat');
    }

          public function export_datajenisobat()
    {
        return Excel::download(new DataJenisObat, 'datajenisobat.xlsx');
    }

        public function import_datajenisobat(Request $request) 
    {
      // validasi
        $this->validate($request, [
          'file' => 'required|mimes:csv,xls,xlsx'
        ]);
   
      // menangkap file excel
        $file = $request->file('file');
   
      // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
   
      // upload ke folder file_siswa di dalam folder public
        $file->move('file_datajenisobat',$nama_file);
   
      // import data
        Excel::import(new DataJenisObat2, public_path('/file_datajenisobat/'.$nama_file));
   
      // notifikasi dengan session
        Session::flash('sukses','Data Jenis Obat Berhasil Diimport!');
   
      // alihkan halaman kembali
        return redirect('/jenisobat/index');
    }

        public function show2($id)
    {
        // where("id", $id)->first();
        $detailjenis = JenisObat::find($id);
        // dd($data->)
        return view("/admincrud/detail_datajenis_obat", compact("detailjenis"));
        // return response()->json($data); dalam bentuk json
    }
}
