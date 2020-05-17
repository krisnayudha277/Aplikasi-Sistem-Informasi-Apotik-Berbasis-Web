@extends('layouts.app')

@section('content')
    <div class="card-header text-center">
        Home > Data Obat > Edit
    </div>
     @if($errors->any())
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="/obat/{{$obat2->id}}/update" method="POST">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Obat</label>
    <input name="kode_obat" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $obat2->kode_obat }}">
  </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Kode Jenis</label>
    <input name="kode_jenis" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $obat2->kode_jenis }}">
<!--     <select name="kode_jenis" class="form-control" id="exampleFormControlSelect1">
      <option value="Padat" @if($obat2->kode_jenis=='Padat')selected @endif>padat</option>
      <option value="Cair" @if($obat2->kode_jenis=='Cair')selected @endif>cair</option>
      <option value="Gas" @if($obat2->kode_jenis=='Gas')selected @endif>gas</option>
      <option value="Larutan" @if($obat2->kode_jenis=='Larutan')selected @endif>larutan</option>
      <option value="Setengah" @if($obat2->kode_jenis=='Setengah')selected @endif>setengah</option>
    </select> -->
  </div>


    <div class="form-group">
    <label for="exampleInputEmail1">Kode Suplier</label>
    <input name="kode_suplier" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $obat2->kode_suplier }}">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Nama Obat</label>
    <input name="nama_obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $obat2->nama_obat }}">
  </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Harga Jual Obat</label>
    <input name="harga_jual_obat" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $obat2->harga_jual_obat }}">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Descripsi</label>
    <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Desc" value="{{ $obat2->description }}">
  </div>

     <div class="form-group">
    <label for="exampleInputEmail1">Stok</label>
    <input name="stok" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Stok" value="{{ $obat2->stok }}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection('content')