@extends('layouts/main')
@section('container')
	<!-- Main -->
	<section id="main" class="container">

		<section class="box special">
			<header class="major">
				<h2>Data Obat Tersedia Di Apotik Kimia Furma</h2>
				<p>Tanggal 20-05-2020</p>
			</header>

			<br>
			<br>

 <table id="datatable" class="table table-bordered table-hover table-striped tblind">
            <thead><tr>
         <th>Id</th>
        <th>Kode Obat</th>
        <th>Kode Jenis</th>
        <th>Kode Suplier</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Des</th>
    </tr>
            </thead>
            <tbody>
                @foreach($obat as $p)
                <tr>
        <td>{{  $p->id }}</td>
        <td>{{  $p->kode_obat }}</td>
        <td>{{  $p->kode_jenis }}</td>
        <td>{{  $p->kode_suplier }}</td>
        <td>{{  $p->nama_obat }}</td>
        <td>{{  $p->harga_jual_obat }}</td>
        <td>{{  $p->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
		</section>

		<br>
			<h1 style="font-size: 30px;" align="center">Berita Hot News</h1>
		<br>

		<div class="row">
			<div class="col-6 col-12-narrower">

				<section class="box special">
					<span class="image featured"><img src="images/acara3.jpg" alt="" /></span>
					<h3>Bahaya Virus<br>Covid-19 </h3>
					<p>Sebuah acara untuk mengumpulkan mahasiswa baru angkatan teknologi informasi agar dapat merekatkan hubungan antar kelas dan angkatan atas.</p>
					<ul class="actions special">
						<li><a href="#" class="button alt">Baca Selengkapnya</a></li>
					</ul>
					<br>
				</section>

			</div>
			<div class="col-6 col-12-narrower">

				<section class="box special">
					<span class="image featured"><img src="images/acara2.jpg" alt="" /></span>
					<h3>Tanda-tanda Terkena Covid-19<br>Nomor 8 Bikin Kagum</h3>
					<p>Sebuah acara untuk mengumpulkan staff muda periode 2019/2020 agar dapat merekatkan hubungan angkatan atas dan dapat mengetahui divisi dalam himpunan.</p>
					<ul class="actions special">
						<li><a href="#" class="button alt">Baca Selengkapnya</a></li>
					</ul>
				</section>

			</div>
		</div>

	</section>
@endsection
