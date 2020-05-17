@extends('layouts.app')

@section('content')
  <div class="card-header text-center">
        Home > Data Jenis > Edit
    </div>
<form action="/admin/setting/{{ Auth::user()->id}}/update" method="POST">
  {{csrf_field()}}

    <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input name="name" type="text" class="form-control" readonly id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama" value="{{ Auth::user()->name }}">
  </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" class="form-control" readonly id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" value="{{ Auth::user()->email }}">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input name="password" type="text" class="form-control" readonly id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pass" value="{{ Auth::user()->password }}">
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection('content')