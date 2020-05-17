@extends('layouts.app')

@section('content')
	<ul>
			<li>Id Mahasiswa : {{  $data->id }}</li>
			<li>Nama : {{  $data->name }}</li>
			<li>NIM : {{  $data->nim }}</li>
			<li>ALamat : {{  $data->address }}</li>
			<li>File Path : {{ $data->filePath}}</li>
			 <li><img src="{{ asset('photo_mhs/'.$data->photo) }}" id="showgambar" style="max-width:200px;max-height:200px;" /> </li>
		</ul>

		<button type="button" class="btn btn-success"><a href="{{ route('biodata.index') }}">Kembali</a></button>
@endsection('content')