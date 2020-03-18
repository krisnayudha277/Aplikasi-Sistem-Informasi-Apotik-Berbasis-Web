@extends('layouts.app')

@section('content')

<!--    <table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <thead><tr>
         <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th style="width: 200px">Aksi</th>
    </tr>
            </thead>
            <tbody>
                @foreach($admin3 as $p)
                <tr>
        <td>{{  $id++ }}</td>
        <td>{{  $->name }}</td>
        <td>{{  $p->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table> -->
<!-- 
<form action="/admin/set_admin/{id}update" method="POST">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $admin->id }}">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $admin->name }}">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kode" value="{{ $admin->email }}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
@endsection('content')