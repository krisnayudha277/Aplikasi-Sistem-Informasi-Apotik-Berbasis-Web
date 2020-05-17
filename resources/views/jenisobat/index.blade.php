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
<a href="{{route ('eksporexcel2')}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

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
        <form method="POST" action="/jenisobat/index" enctype="multipart/form-data">
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
          <a href="/admincrud/data_jenis_obat" class="btn btn-primary" target="_blank">CETAK PDF</a>
<!--     <a href="{{route ('admin.index')}}" class="btn btn-info">Admin</a>
    <a href="{{route ('home')}}" class="btn btn-info">Obat</a> -->
            <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('jenisobat.create') }}">Add Category</a>
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
                        <a href="/detail_jenis/{{ $p->id }}" class="btn btn-success detail">Detail</a>
                        <a href="/edit_jenis/{{ $p->id }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('jenis.hapus', ['id'=>$p->id ]) }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


</script>
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="/jenisobat/index" method="POST">
            {{csrf_field()}}

  <div class="form-group">
    <label for="exampleInputEmail1">Id</label>
    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Kode">
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis</label>
 <input name="kode_jenis" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Jenis">
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

   <div class="form-group">
    <label for="exampleInputPassword1">Gambar</label><br>
    <input type="file" id="inputgambar" name="photo" required="required">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div> -->
@endsection('content')