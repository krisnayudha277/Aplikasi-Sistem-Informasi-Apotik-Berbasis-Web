@extends('layouts.app')

@section('content')
    <div class="card-header text-center">
        Home > Data Jenis > Edit
    </div>
<form action="/jenisobat/index/{{$jenis->id}}/update" method="POST">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Obat</label>
    <input name="kode_jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $jenis->kode_jenis }}">
  </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Kode Jenis</label>
    <select name="kode_jenis" class="form-control" id="exampleFormControlSelect1">
      <option value="Padat" @if($jenis->kode_jenis=='Padat')selected @endif>padat</option>
      <option value="Cair" @if($jenis->kode_jenis=='Cair')selected @endif>cair</option>
      <option value="Gas" @if($jenis->kode_jenis=='Gas')selected @endif>gas</option>
      <option value="Larutan" @if($jenis->kode_jenis=='Larutan')selected @endif>larutan</option>
      <option value="Setengah" @if($jenis->kode_jenis=='Setengah')selected @endif>setengah</option>
    </select>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Nama Obat</label>
    <input name="nama_jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $jenis->nama_jenis }}">
  </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Harga Jual Obat</label>
    <input name="harga_jual_obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $jenis->harga_jual_obat }}">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Descripsi</label>
    <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Desc" value="{{ $jenis->description }}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection('content')