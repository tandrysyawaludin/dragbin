<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dragbin adalah aplikasi yang membantu masa depan dari daur ulang sampah. Kalian dapan membuat bumi kembali berjaya lagi dan mengambil keuntungan dari sampah.">
    <meta name="author" content="tandry syawaludin">
	<title>Selamat datang di Dragbin</title>
	
	<link href="<?php echo base_url()?>assets/styles/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="<?php echo base_url()?>assets/styles/welcome.css" rel="stylesheet" crossorigin="anonymous">
    
    <link rel="shortcut icon" href="<?php echo base_url(), "assets/images/favicon.jpg" ?>">
</head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">dragbin</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Beranda</a>
        <a class="nav-link" href="<?php echo base_url()?>index.php/signin">Masuk</a>
        <a class="nav-link" href="<?php echo base_url()?>index.php/signup">Daftar</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">dragbin</h1>
    <p class="lead">adalah aplikasi yang membantu masa depan dari daur ulang sampah. Kalian dapan membuat bumi kembali berjaya lagi dan mengambil keuntungan dari sampah.</p>
    <p class="lead">
      <a href="<?php echo base_url()?>index.php/signup" class="btn btn-lg btn-light">Ayo gabung!</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>copyright 2019 | dragbin website</p>
    </div>
  </footer>
</div>
</body>
</html>