@extends('layouts.app')

@section('content')
    <div class="card mt-5">
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
              {{session('sukses')}}
          </div>
          @endif
    <div class="card-header text-center">
        Home > Data Obat
    </div>
    <div class="card-body">
    <a href="{{route ('eksporexcel')}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

    {{-- notifikasi form validasi --}}
    @if ($errors->has('file'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('file') }}</strong>
    </span>
    @endif
 
    {{-- notifikasi sukses --}}
    @if ($sukses = Session::get('sukses'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $sukses }}</strong>
    </div>
    @endif
 
    <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
      IMPORT EXCEL
    </button>
 
    <!-- Import Excel -->
    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="POST" action="/home" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
            </div>
            <div class="modal-body">
 
              {{ csrf_field() }}
 
              <label>Pilih file excel</label>
              <div class="form-group">
                <input type="file" name="file" required="required">
              </div>
 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Import</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <a href="/admincrud/data_obat" class="btn btn-primary" target="_blank">CETAK PDF</a>
<!--     <a href="{{route ('jenisobat.index')}}" class="btn btn-info">Jenis</a>
    <a href="{{route ('admin.index')}}" class="btn btn-info">Admin</a>
    <a href="/admincrud/sampah_obat" class="btn btn-info">Data Trash</a> -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
     Tambah
    </button>
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
        <th>Des</th>
        <th style="width: 200px">Aksi</th>
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
        <td>{{  $p->description }}</td>
                    <td>
                        <a href="#" class="btn btn-success detail">Detail</a>
                        <a href="/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                        <a href="/obat/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="/create" method="POST">
            {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Id</label>
    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Kode">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Kode Obat</label>
    <input name="kode_obat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Kode Obat">
  </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Kode Jenis</label>
    <select name="kode_jenis" class="form-control" id="exampleFormControlSelect1">
      <option value="Padat">padat</option>
      <option value="Cair">cair</option>
      <option value="Gas">gas</option>
      <option value="Larutan">larutan</option>
      <option value="Setengah">setengah</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Kode Suplier</label>
    <input name="kode_suplier" type="text" class="form-control" id="exampleInputPassword1" placeholder="Kode Suplier">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Obat</label>
    <input name="nama_obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Harga Obat</label>
    <input name="harga_jual_obat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection('content')
