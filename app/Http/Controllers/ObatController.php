<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;

class ObatController extends Controller
{
    
    public function index(){
    	// $obat = Obat::all();
     //    // dd(BiodataMahasiswa::)
    	// return view("obat.index", compact("obat"));
    }
    // public function create(){
    //     // return view("dashboard.create");
    // }
    // public function store(Request $request){
    // 	// dd($request->file());
    //     // $filePath = $request->file("photo")->store("photo_mhs");
    //     // $photo_mhs = 'products-' .date('Ymdhis').'.'.$request->photo->getClientOriginalExtension();
    //     // $request->photo->move('photo_mhs', $photo_mhs);


    //     // $obat = new Obat;
    //     // $obat->kode_obat = $request->kode_obat;
    //     // $obat->kode_jenis = $request->kode_jenis;
    //     // $obat->kode_suplier = $request->kode_suplier;
    //     // $obat->nama_obat = $request->nama_obat;
    //     // $obat->harga_jual_obat = $request->harga_jual_obat;
    //     // $obat->description = $request->description;

    //     // // $mahasiswa->photo = $photo_mhs;
    //     // $obat->filePath = $filePath;


    //     // $obat->save();

    //     // // $filePath = $request->file("photo")->store("photo_mhs");
    //     // // return $filePath;
    //     // return redirect()->route("layout");
    // }

    // public function edit($id){
    // 	$data = BiodataMahasiswa::find($id);
    //     return view("biodata.edit", compact("data"));
    // }

    // public function update(Request $request, $id){
    //     // BiodataMahasiswa::where("id", $id)->update($request->all());

    //     BiodataMahasiswa::where("id", $id)->update($request->except("_token"));
    //     return redirect()->route("biodata.index");
    // }

    // public function destroy($id){
    //     $data = BiodataMahasiswa::where("id", $id)->delete();
    //     return redirect()->route("biodata.index");
        
    // }

    // public function show($id){
    //     // where("id", $id)->first();
    //     $data = BiodataMahasiswa::find($id);
    //     // dd($data->)
    //     return view("biodata.show", compact("data"));
    //     // return response()->json($data); dalam bentuk json
    // }
}
