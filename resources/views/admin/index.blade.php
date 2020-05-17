@extends('layouts.app')

@section('content')
    <div class="card mt-5">
    <div class="card-header text-center">
       Home > Admin
    </div>
    <div class="card-body">
        <a href="/admincrud/data_obat" class="btn btn-primary" target="_blank">CETAK PDF</a>
        <a href="{{route ('eksporexcel3')}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

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
        <br/>
        <br/>
        <table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <thead><tr>
         <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th style="width: 200px">Aksi</th>
    </tr>
            </thead>
            <tbody>
                @foreach($admin as $p)
                <tr>
        <td>{{  $p->id }}</td>
        <td>{{  $p->name }}</td>
        <td>{{  $p->email }}</td>
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