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

  <link href="<?php echo base_url()?>assets/styles/main.css" rel="stylesheet" crossorigin="anonymous">
  <link href="<?php echo base_url()?>assets/styles/welcome.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="shortcut icon" href="<?php echo base_url(), "assets/images/favicon.jpg" ?>">
</head>
  <body class="text-center">
  <header class="navbar-container">
    <h3 class="brand">dragbin</h3>
    <nav class="major-link-container">
      <a class="major-link" href="<?php echo base_url()?>index.php/signin">Masuk</a>
      <a class="major-link" href="<?php echo base_url()?>index.php/signup">Daftar</a>
      <a class="major-link" href="<?php echo base_url()?>index.php/help-center">Pusat Bantuan</a>
    </nav>
  </header>

  <main role="main" class="main-container">
    <h1 class="cover-heading">Ini adalah dragbin</h1>
    <p>
      aplikasi yang membantu masa depan dari daur ulang sampah. 
      Kalian dapan membuat bumi kembali berjaya lagi dan mengambil keuntungan dari sampah.
    </p>
    <a href="<?php echo base_url()?>index.php/signup" class="join-link">
      Ayo gabung &#8594;
    </a>
  </main>

  <footer class="footer-container">
    <p>copyright 2020 by dragbin</p>
  </footer>
</div>
</body>
</html>