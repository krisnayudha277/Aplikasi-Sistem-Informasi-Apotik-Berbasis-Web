@extends('layouts.app')
@section('content')
  <div class="card mt-5">
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
              {{session('sukses')}}
          </div>
          @endif
    <div class="card-header text-center">
        Home > Data Jenis
    </div>
    <div class="card-body">
          <a href="/admincrud/data_jenis_obat" class="btn btn-primary" target="_blank">CETAK PDF</a>
<!--     <a href="{{route ('admin.index')}}" class="btn btn-info">Admin</a>
    <a href="{{route ('home')}}" class="btn btn-info">Obat</a> -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
     Tambah
    </button>
        <br/>
        <br/>
        <table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <thead><tr>
         <th>Id</th>
        <th>Kode Jenis</th>
        <th>Nama Jenis</th>
        <th>Deskripsi</th>
        <th>Aktif</th>
        <th>Harga</th>
        <th style="width: 200px">Aksi</th>
    </tr>
            </thead>
            <tbody>
                @foreach($jenis as $p)
                <tr>
        <td>{{  $p->id }}</td>
        <td>{{  $p->kode_jenis }}</td>
        <td>{{  $p->nama_jenis }}</td>
        <td>{{  $p->description }}</td>
        <td>{{  $p->aktif_jenis }}</td>
        <td>{{  $p->harga_jual_obat }}</td>
                    <td>
                        <a href="#" class="btn btn-success detail">Detail</a>
                        <a href="/edit_jenis/{{ $p->id }}" class="btn btn-warning">Edit</a>
                        <a href="/jenisobat/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


</script>
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

        <form action="/jenis/create2" method="POST">
            {{csrf_field()}}

  <div class="form-group">
    <label for="exampleInputEmail1">Id</label>
    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Kode">
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis</label>
    <select name="kode_jenis" class="form-control" id="exampleFormControlSelect1">
      <option value="Padat">padat</option>
      <option value="Cair">cair</option>
      <option value="Gas">gas</option>
      <option value="Larutan">larutan</option>
      <option value="Setengah">setengah</option>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input name="nama_jenis" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Jenis">
  </div>
  

  <div class="form-group">
    <label for="exampleInputEmail1">Descriptsi</label>
    <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Descriptsi">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Aktif</label>
     <select name="aktif_jenis" class="form-control" id="exampleFormControlSelect1">
      <option value="Non Aktif">Non Aktif</option>
      <option value="Aktif">Aktif</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input name="harga_jual_obat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga">
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