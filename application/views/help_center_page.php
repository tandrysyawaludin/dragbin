<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Masuk ke dragbin dan cari peluang-peluang dari sampah.">
	<meta name="author" content="tandry syawaludin">
	<title>Pusat Bantuan Dragbin</title>

	<link rel="stylesheet" href="<?php echo base_url()?>assets/styles/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="<?php echo base_url()?>assets/styles/signin.css" rel="stylesheet" crossorigin="anonymous">

	<link rel="shortcut icon" href="<?php echo base_url(), "assets/images/favicon.jpg" ?>">
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo base_url() ?>">dragbin</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url() ?>">Welcome</a>
        </li>
        <li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url("/index.php/signin") ?>">Masuk</a>
        </li>
        <li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url("/index.php/signup") ?>">Daftar</a>
				</li>
			</ul>
		</div>
  </nav>
  
  <div class="container">
    <ul class="list-group">
      <li class="list-group-item">
        <h5>Apa itu Dragbin?</h5>
        <p>Dragbin adalah platform untuk menghubungkan antara pemilik sampah dengan pengepul atau orang yang mengumpulkan sampah.</p>
      </li>
      <li class="list-group-item">
        <h5>Apa itu Dragbin gratis?</h5>
        <p>Ya, dragbin gratis.</p>
      </li>
      <li class="list-group-item">
        <h5>Apa itu Mitra Dragbin?</h5>
        <p>Mitra adalah pengguna dragbin yang diber akses untuk membeli sampah atau bisa disebut pengepul yang terdaftar di dragbin.</p>
      </li>
      <li class="list-group-item">
        <h5>Bagaimana cara daftar sebagai Mitra Dragbin?</h5>
        <p>Pengguna yang telah melalukan verifikasi email bisa mengirim email ke alamat syawaludintandry@gmail.com dengan mencantumkan
           KTP, Nomor Telepon yang bisa dihubungi dan Lokasi.
        </p>
      </li>
      <li class="list-group-item">
        <h5>Berapa biaya mendaftar sebagai Mitra Dragbin?</h5>
        <p>Secara resmi GRATIS, tidak dipungut biaya.</p>
      </li>
      <li class="list-group-item">
        <h5>Apa syarat menjadi Mitra Dragbin?</h5>
        <p>Tidak ada syarat khusus di awal kecuali data-data personal yang akan diminta, selebihnya akan dikomunikasikan
           via email.
        </p>
      </li>
      <li class="list-group-item">
        <h5>Apa keuntungan menjual sampah di Dragbin?</h5>
        <p>Pengguna mendapatkan reward berupa uang atau lainnya* berdasarkan jenis sampah yang dijual</p>
      </li>
    </ul>
  </div>
</body>

</html>