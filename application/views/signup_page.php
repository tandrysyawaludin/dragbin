<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description"
		content="Daftar di dragbin dan raih kesempatan dalam kontribusi kita terhadap bumi serta dapatkan keuntung dari sampah.">
	<meta name="author" content="tandry syawaludin">
	<title>Daftar Dragbin</title>

	<link href="<?php echo base_url()?>assets/styles/main.css" rel="stylesheet" crossorigin="anonymous">
	<link rel="shortcut icon" href="<?php echo base_url(), "assets/images/favicon.jpg" ?>">
</head>

<body>
  <header class="navbar-container">
    <h3 class="brand">dragbin</h3>
    <nav class="major-link-container">
      <a class="major-link" href="<?php echo base_url()?>index.php/signin">Masuk</a>
      <a class="major-link" href="<?php echo base_url()?>index.php/signup">Daftar</a>
      <a class="major-link" href="<?php echo base_url()?>index.php/help-center">Pusat Bantuan</a>
    </nav>
  </header>

	<div class="main-container">
		<form method="POST" action="<?php echo base_url()?>index.php/signup/create_user">
      <h3>Daftar Dragbin</h3>
      
      <div class="form-group">
        <label class="label-primary" for="email">Email *</label>
        <input name="email" type="email" id="email" class="input-primary" placeholder="user@dragbin.com" required
          autofocus>
      </div>

      <div class="form-group">
        <label class="label-primary" for="password">Password *</label>
        <input name="password" type="password" id="password" class="input-primary" placeholder="*****" required>
      </div>

      <div class="form-group">
        <label class="label-primary" for="phone_number">Nomor Telepon *</label>
        <input name="phone_number" type="text" id="phone_number" class="input-primary" placeholder="080808080808"
          required>
      </div>

      <div class="form-group">
        <label class="label-primary" for="name">Nama Lengkap *</label>
        <input name="name" type="text" id="name" class="input-primary" placeholder="Mr. Dragbin" required>
      </div>

      <div class="form-group">
        <label class="label-primary" for="whatsapp">Whatsapp</label>
        <input name="whatsapp" type="text" id="whatsapp" class="input-primary" placeholder="080808080808">
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <label class="label-primary" for="address">Alamat *</label>
        <textarea name="address" type="text" id="address" class="input-primary" placeholder="Jl. dragbin nomor 1"
          required></textarea>
      </div>

      <div class="form-group">
        <label class="label-primary" for="map_link">Tautan Google Map</label>
        <textarea name="map_link" type="text" id="map_link" class="input-primary"
          placeholder="https://goo.gl/maps/uzgenk8K4Q7tihy78"></textarea>
      </div>

			<button class="btn-primary btn-block" type="submit">Daftar</button>
		</form>
	</div>
</body>
</html>
