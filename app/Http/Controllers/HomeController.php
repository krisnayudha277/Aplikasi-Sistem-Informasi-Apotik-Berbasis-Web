<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataObat;
use App\Obat;
use App\Http\Controllers\Controller;
use App\Imports\DataObat2;
use App\JenisObat;
use App\Suplier;
use App\User;
use Session;
use PDF;
use Validator;
use App\Http\Requests\UpdateObat;
// use DB;
// use App\Charts\GrafikUser;
// use ConsoleTVs\Charts\Classes\Chartjs\Chart;
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
             $stok2 = Obat::max('stok');

      
        return view('home',['obat'=>$obat,'stok2'=>$stok2]);

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

    //     public function create(Request $request)
    // {
    //     $data['list_kategori'] = JenisObat::all();
    //     return redirect('/home')->with('sukses','Data berhasil ditambah');
    // }

    //     public function store(Request $request)
    // {
    //     // \App\Obat::create($request->all());
    //     // return view('/home')->with('sukses','Data berhasil ditambah');
    // }

          public function create()
    {
       //     \App\Obat::create($request->all());
       // return redirect('/jenis')->with('sukses','Data berhasil ditambah');
            // $data['list_jenis'] = JenisObat::all();
            $data['list_kategori'] = JenisObat::all();
            $data2['list_kategori2'] = Suplier::all();
            return view('/admincrud/tambah_dataobat', $data,$data2);
    }

            public function store(Request $request)
    {
        //   \App\Obat::create($request->all());
        // return redirect('/home')->with('sukses','Data berhasil ditambah');
          $rules = [
            'nama_obat' => 'required|min:3|unique:tbl_obat,nama_obat',
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'min:3' => ':attribute terlalu pendek',
            'unique' => ':attribute sudah ada di database'
        ];

        $validasi = Validator::make($request->all(), $rules, $message);

        if ($validasi->fails()) {

            return redirect()->route('obat.create')->withErrors($validasi->errors())->withInput($request->all());

        } else {

            $insert = Obat::create ([
                'id' => $request->id,
                'kode_obat' => $request->kode_obat,
                'kode_jenis' => $request->kode_jenis,
                'kode_suplier' => $request->kode_suplier,
                'nama_obat' => $request->nama_obat,
                'harga_jual_obat' => $request->harga_jual_obat,
                'description' => $request->description,
                'stok' => $request->stok,
                // 'photo' => $request->file("photo")->store("public")
            ]);

            if ($insert) {
                return redirect()->route('home')->with('success', 'Berhasil menambah kategori.');
            } else{
                return redirect()->route('home')->with('error', 'Gagal menambah data kategori.');

        }
        // \App\JenisObat::create($request->all());
        // return redirect('/jenis')->with('sukses','Data berhasil ditambah');
    }
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

          public function update(UpdateObat $request, $id)
    {
        // $obat2=\App\Obat::find($id);
        // $obat2->update($request->all());
        \App\Obat::where("id", $id)->update($request->except("_token", "_method"));
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

          public function total()
    {
         $countdataobat = Obat::count();
         $countdatasuplier = Obat::count();
         $countdataobat2 = Obat::all();
         $countdatajenisobat = JenisObat::count();
         $countdataadmin = User::count();
        // $countdatasuplier = Suplier::count();



          $categories = [];
          $data =[];
        foreach ($countdataobat2 as $o) {
          $categories[] = $o->nama_obat;
          $data [] = $o->stok;
        }

        // dd($data);
         return view('/admincrud/totaldata', compact('countdataobat','countdatajenisobat','countdataadmin','categories','countdataobat2','data','countdatasuplier'));
         // ['countdataobat'=>$countdataobat,'countdatajenisobat'=>$countdatajenisobat,'countdataadmin'=>$countdataadmin,'categories'=>$categories,'countdataobat2'=>$countdataobat2,'stok'=>$stok2]
    }

        public function show($id)
    {
        // where("id", $id)->first();
        $detailobat = Obat::find($id);
        // dd($data->)
        return view("/admincrud/detail_data_obat", compact("detailobat"));
        // return response()->json($data); dalam bentuk json
    }

    //     public function chart($id)
    // {
    //     // where("id", $id)->first();
    //     $nama_obat = \App\Obat::count();

    //     $categories = [];
    //     foreach ($nama_obat as $j) {
    //       $categories[] = $j->nama_obat;
    //     }
    //     // dd($data->)
    //     return view("/home",['nama_obat' => $nama_obat,'categories' => $categories]);
    //     // return response()->json($data); dalam bentuk json
    // }

    //     public function chart()
    // {
    //     $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))

    //         ->get();

    //     $chart = GrafikUser::database($users, 'bar', 'highcharts')

    //         ->title("Monthly new Register Users")

    //         ->elementLabel("Total Users")

    //         ->dimensions(1000, 500)

    //         ->responsive(false)

    //         ->groupByMonth(date('Y'), true);

    //     return view('/admincrud/totaldata',compact('chart'));
    // }


}
