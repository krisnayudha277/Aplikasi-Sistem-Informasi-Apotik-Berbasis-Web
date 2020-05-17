@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>

@stop
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
    <a href="{{ route('eksporexcel')}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

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
      <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('obat.create') }}">Add Category</a>
        <br/>
        <br/>
        <table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <thead><tr>
         <th>Id</th>
        <th>Kode Obat</th>
        <th>Kode Jenis</th>
        <th>Nama</th>
        <th>Harga</th>
         <th>Stok</th>
        <th style="width: 200px">Aksi</th>
    </tr>
            </thead>
            <tbody>
                @foreach($obat as $p)
                <tr>
        <td>{{  $p->id }}</td>
        <td>{{  $p->kode_obat }}</td>
        <td>{{  $p->kode_jenis }}</td>
        <td>{{  $p->nama_obat }}</td>
        <td>{{  $p->harga_jual_obat }}</td>
                <td>{{  $p->stok }}</td>
                    <td>
                        <a href="/detail_obat/{{ $p->id }}" class="btn btn-success detail">Detail</a>
                        <a href="/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                        <a href="/obat/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div><br><br>
@endsection('content')
