@extends('layouts.app')

@section('content')
	<table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <thead><tr>
        <th>Id</th>
        <th>Kode Obat</th>
        <th>Kode Jenis</th>
        <th>Kode Suplier</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Des</th>
        <th>Stok</th>
        <th style="width: 200px">Photo</th>
    </tr>
            </thead>
            <tbody>
                <tr>
    	<td>{{  $detailobat->id }}</td>
        <td>{{  $detailobat->kode_obat }}</td>
        <td>{{  $detailobat->kode_jenis }}</td>
        <td>{{  $detailobat->kode_suplier }}</td>
        <td>{{  $detailobat->nama_obat }}</td>
        <td>{{  $detailobat->harga_jual_obat }}</td>
        <td>{{  $detailobat->description }}</td>
        <td>{{  $detailobat->stok }}</td>
        <td><img src="{{ asset('photo_obat/'.$detailobat->photo) }}" id="showgambar" style="max-width:200px;max-height:200px;" /></td>
                </tr>
            </tbody>
        </table>

		<button type="button" class="btn btn-success"><a href="/jenisobat/index">Kembali</a></button>
@endsection('content')