@extends('layouts.app')

@section('content')
    <div class="card mt-5">
    <div class="card-header text-center">
       Home > Admin
    </div>
    <div class="card-body">
<!--          <a href="{{route ('home')}}" class="btn btn-info">Data Obat</a> -->
  <!--   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
     Tambah
    </button> -->
        <br/>
        <br/>
        <table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <thead><tr>
         <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th style="width: 200px">Aksi</th>
    </tr>
            </thead>
            <tbody>
                @foreach($admin as $p)
                <tr>
        <td>{{  $p->id }}</td>
        <td>{{  $p->name }}</td>
        <td>{{  $p->email }}</td>
        <td>{{  $p->password }}</td>
                    <td>
                        <a href="/edit/{{ $p->id }}" class="btn btn-warning">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection('content')