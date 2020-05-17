<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Maatwebsite\Excel\Facades\Excel;
// use App\Exports\DataSuplier;
use App\Suplier;
use App\Http\Controllers\Controller;
// use App\Imports\DataSuplier2;
// use App\JenisObat;
// use App\User;
use Session;
// use PDF;
use Validator;
use App\Http\Requests\UpdateSuplier;
class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suplier =\App\Suplier::all();

        return view('/suplier/index',['suplier'=>$suplier]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            // $data['list_suplier'] = Suplier::all();
            return view('/admincrud/tambah_datasuplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $rules = [
            'nama_suplier' => 'required|min:3|unique:tbl_suplier,nama_suplier',
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'min:3' => ':attribute terlalu pendek',
            'unique' => ':attribute sudah ada di database'
        ];

        $validasi = Validator::make($request->all(), $rules, $message);

        if ($validasi->fails()) {

            return redirect()->route('suplier.create')->withErrors($validasi->errors())->withInput($request->all());

        } else {

            $insert = Suplier::create ([
                'id' => $request->id,
                'kode_suplier' => $request->kode_suplier,
                'nama_suplier' => $request->nama_suplier,
                'alamat_suplier' => $request->alamat_suplier,
                'telepon_suplier' => $request->telepon_suplier,
                'description' => $request->description,
                'aktif_suplier' => $request->aktif_suplier
                // 'photo' => $request->file("photo")->store("public")
            ]);

            if ($insert) {
                return redirect()->route('suplier.index')->with('success', 'Berhasil menambah kategori.');
            } else{
                return redirect()->route('suplier.index')->with('error', 'Gagal menambah data kategori.');

        }
        // \App\JenisObat::create($request->all());
        // return redirect('/jenis')->with('sukses','Data berhasil ditambah');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
