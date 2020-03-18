<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Obat</h4>
		<h6><a target="/home" ></a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>II</th>
				<th>Kode Obat</th>
				<th>Kode Jenis</th>
				<th>Kode Suplier</th>
				<th>Nama Obat</th>
				<th>Harga Jual_obat</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
	<!-- 		@php $i=1 @endphp
			@foreach($obat3 as $p) -->
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->kode_obat}}</td>
				<td>{{$p->kode_jenis}}</td>
				<td>{{$p->kode_suplier}}</td>
				<td>{{$p->nama_obat}}</td>
				<td>{{$p->harga_jual_obat}}</td>
				<td>{{$p->description}}</td>
			</tr>
<!-- 			@endforeach -->
		</tbody>
	</table>
 
</body>
</html>