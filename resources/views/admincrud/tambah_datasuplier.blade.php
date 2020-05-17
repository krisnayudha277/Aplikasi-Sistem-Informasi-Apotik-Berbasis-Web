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
     <form action="{{ route('suplier.store') }}" method="POST">
             {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Id</label>
    <input name="id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Kode">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Kode Suploer</label>
    <input name="kode_suplier" type="number" class="form-control" id="exampleInputPassword1" placeholder="Kode Suplier">
  </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Nama Suplier</label>
    <input name="nama_suplier" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Suplier">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Alamat Suplier</label>
    <input name="alamat_suplier" type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat Suplier">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Telepon Suplier</label>
   <input name="telepon_suplier" type="number" class="form-control" id="exampleInputPassword1" placeholder="Telepon">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="description">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Aktif</label>
 <select name="aktif_suplier" class="form-control" id="exampleFormControlSelect1">
      <option value="Non Aktif">Non Aktif</option>
      <option value="Aktif">Aktif</option>
    </select>
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
