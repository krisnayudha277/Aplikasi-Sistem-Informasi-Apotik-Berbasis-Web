@extends('layouts.app')
@section('content')
        <div class="card" style="width: 18rem;">
        	<center> Total Data Obat</center>
  <div class="card-body" style="background-color: #138496">
    <h5 class="card-title"></h5>
    <p class="card-text" style="size: 20px"><center>  {{ $countdataobat }} </center></p>
  </div>
</div><br><br>

  <div class="card" style="width: 18rem;">
        	<center> Total Data Jenis Obat</center>
  <div class="card-body" style="background-color: #6D7FCC">
    <h5 class="card-title"></h5>
    <p class="card-text" style="size: 20px"><center>  {{ $countdatajenisobat }} </center></p>
  </div>
</div><br><br>

  <div class="card" style="width: 18rem;">
        	<center> Total Data Admin</center>
  <div class="card-body" style="background-color: #6AB5CD">
    <h5 class="card-title"></h5>
    <p class="card-text" style="size: 20px"><center>  {{ $countdataadmin }} </center></p>
  </div>
</div>
@endsection('content')