@extends('layouts.app')
@section('content')
<div class="card mt-5">
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
              {{session('sukses')}}
          </div>
          @endif
    <div class="card-header text-center">
       Home > Sampah
    </div>
    <div class="card-body">
 <!--    <a href="{{route ('jenisobat.index')}}" class="btn btn-info">Jenis</a>
    <a href="{{route ('admin.index')}}" class="btn btn-info">Admin</a> -->
    <a href="/obat/kembalikan_semua" class="btn btn-info">Kembali Data</a>
    <a href="/obat/hapus_permanen_semua" class="btn btn-info">Hapus Permanen</a>
        <br/>
        <br/>
    <table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <thead><tr>
         <th>Id</th>
        <th>Kode Obat</th>
        <th>Kode Jenis</th>
        <th>Kode Suplier</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
            </thead>
            <tbody>
                @foreach($obat as $p)
                <tr>
        <td>{{  $p->id }}</td>
        <td>{{  $p->kode_obat }}</td>
        <td>{{  $p->kode_jenis }}</td>
        <td>{{  $p->kode_suplier }}</td>
        <td>{{  $p->nama_obat }}</td>
        <td>{{  $p->harga_jual_obat }}</td>
                    <td>
                        <a href="/obat/kembalikan/{{ $p->id }}" class="btn btn-warning">Kembalikan</a>
                        <a href="/obat/hapus_permanen/{{ $p->id }}" class="btn btn-danger">Hapus Permanen</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>
  </div>
@endsection('content')