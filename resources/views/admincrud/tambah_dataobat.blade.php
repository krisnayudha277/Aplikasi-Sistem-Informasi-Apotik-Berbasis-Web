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
 <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
     <form action="{{ route('obat.store') }}" method="POST">
             {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Id</label>
    <input name="id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Kode">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Kode Obat</label>
    <input name="kode_obat" type="number" class="form-control" id="exampleInputPassword1" placeholder="Kode Obat">
  </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Kode Jenis</label>
    <select class="form-control @error('kode_jenis') is-invalid @enderror" id="kode_jenis" name="kode_jenis">
                                        @foreach ($list_kategori as $kategori)
                                        <option value="{{ $kategori->nama_jenis }}">
                                            {{ $kategori->nama_jenis }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('nama_jenis')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Kode Suplier</label>
    <input name="kode_suplier" type="number" class="form-control" id="exampleInputPassword1" placeholder="Kode Suplier">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Obat</label>
   <input name="nama_obat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Harga Obat</label>
    <input name="harga_jual_obat" type="number" class="form-control" id="exampleInputPassword1" placeholder="Harga">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Stok</label>
    <input name="stok" type="number" class="form-control" id="exampleInputPassword1" placeholder="Stok">
  </div>
<!-- 
    <div class="form-group">
    <label for="exampleInputPassword1">Gambar</label><br>
    <input type="file" id="inputgambar" name="photo" required="required">
  </div> -->

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>


@endsection('content')
