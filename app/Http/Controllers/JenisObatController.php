<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisObat;
use PDF;
use App\Http\Controllers\Controller;
// use App\Imports\DataObat2;
// use Session;
// use Maatwebsite\Excel\Facades\Excel;
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

        public function create2(Request $request)
    {
        \App\JenisObat::create($request->all());
        return redirect('/jenis')->with('sukses','Data berhasil ditambah');
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
     
          return redirect('/admincrud/index');
    }

           public function cetak_pdf()
    {
        $jenis3 = JenisObat::all();
 
        $pdf = PDF::loadview('admincrud/data_jenis_obat',['jenis3'=>$jenis3]);
        return $pdf->download('laporan-data-jenis-obat');
    }
}
