@extends('layouts.app')

@section('content')
<table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <thead><tr>
         <th>Id</th>
        <th>Kode Jenis</th>
        <th>Nama Jenis</th>
        <th>Deskripsi</th>
        <th>Aktif</th>
        <th>Harga</th>
        <th style="width: 200px">Photo</th>
    </tr>
            </thead>
            <tbody>
                <tr>
        <td>{{  $detailjenis->id }}</td>
        <td>{{  $detailjenis->kode_jenis }}</td>
        <td>{{  $detailjenis->nama_jenis }}</td>
        <td>{{  $detailjenis->description }}</td>
        <td>{{  $detailjenis->aktif_jenis }}</td>
        <td>{{  $detailjenis->harga_jual_obat }}</td>
        <td><img src="{{ asset('photo_jenisobat/'.$detailjenis->photo) }}" id="showgambar" style="max-width:200px;max-height:200px;" /></td>
                </tr>
            </tbody>
        </table>

		<button type="button" class="btn btn-success"><a href="/jenisobat/index">Kembali</a></button>
@endsection('content')