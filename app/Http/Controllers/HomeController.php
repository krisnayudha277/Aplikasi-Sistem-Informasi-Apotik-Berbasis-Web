<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataObat;
use App\Obat;
use App\Http\Controllers\Controller;
use App\Imports\DataObat2;
use App\JenisObat;
use App\User;
use Session;
use PDF;
class HomeController extends Controller
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
         public function index()
    {
        $obat =\App\Obat::all();
        return view('home',['obat'=>$obat]);
    }

        public function export_dataobat()
    {
        return Excel::download(new DataObat, 'dataobat.xlsx');
    }

        public function import_dataobat(Request $request) 
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
        $file->move('file_dataobat',$nama_file);
   
      // import data
        Excel::import(new DataObat2, public_path('/file_dataobat/'.$nama_file));
   
      // notifikasi dengan session
        Session::flash('sukses','Data Obat Berhasil Diimport!');
   
      // alihkan halaman kembali
        return redirect('/home');
    }

       public function cetak_pdf()
    {
        $obat3 = Obat::all();
 
        $pdf = PDF::loadview('admincrud/data_obat',['obat3'=>$obat3]);
        return $pdf->download('laporan-dataobat');
    }

        public function create(Request $request)
    {
        \App\Obat::create($request->all());
        return redirect('/home')->with('sukses','Data berhasil ditambah');
    }

        public function store(Request $request)
    {
        // \App\Obat::create($request->all());
        // return view('/home')->with('sukses','Data berhasil ditambah');
    }

        public function destroy(Request $request)
    {
        // \App\Obat::create($request->all());
        // return view('/home')->with('sukses','Data berhasil ditambah');
    }

      public function edit($id)
    {
        $obat2=\App\Obat::find($id);
        return view('admincrud/edit',['obat2'=>$obat2]);
    }

          public function update(Request $request, $id)
    {
        $obat2=\App\Obat::find($id);
        $obat2->update($request->all());
        return redirect('/home')->with('sukses','Data berhasil diupdate');
    }

    // hapus sementara
       public function hapus($id)
    {
          $obat = Obat::find($id);
          $obat->delete();
     
          return redirect('/home');
    }

        // menampilkan data guru yang sudah dihapus
        public function trash()
    {
          // mengampil data guru yang sudah dihapus
          $obat = Obat::onlyTrashed()->get();
          return view('/admincrud/sampah_obat', ['obat' => $obat]);
    }

     // restore data guru yang dihapus
         public function kembalikan($id)
    {
          $obat = Obat::onlyTrashed()->where('id',$id);
          $obat->restore();
          return redirect('/admincrud/sampah_obat');
    }

    // restore semua data guru yang sudah dihapus
        public function kembalikan_semua()
    {
            
          $obat = Obat::onlyTrashed();
          $obat->restore();
     
          return redirect('/admincrud/sampah_obat');
    }

    // hapus permanen
        public function hapus_permanen($id)
    {
          // hapus permanen data guru
          $obat = Obat::onlyTrashed()->where('id',$id);
          $obat->forceDelete();
     
          return redirect('/admincrud/sampah_obat');
    }

    // hapus permanen semua guru yang sudah dihapus
        public function hapus_permanen_semua()
    {
          // hapus permanen semua data guru yang sudah dihapus
          $obat = Obat::onlyTrashed();
          $obat->forceDelete();
     
          return redirect('/admincrud/sampah_obat');
    }

          public function total(){
         $countdataobat = Obat::count();
         $countdatajenisobat = JenisObat::count();
         $countdataadmin = User::count();
         return view('/admincrud/totaldata', compact('countdataobat','countdatajenisobat','countdataadmin'));
    }
}
