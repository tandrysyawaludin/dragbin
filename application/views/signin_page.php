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
  <title>Masuk Dragbin</title>
  
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
		<form action="<?php echo base_url()?>index.php/signin/authenticate_user" method="post">
			<h3>Masuk Dragbin</h3>
      
      <?php if (isset($this->session->status)) { ?>
        <div class="alert-<?php echo $this->session->status === "failed" ? "danger" : "success" ?>" role="alert">
          <?php echo $this->session->message ?>
        </div>
      <?php } ?>

      <div class="form-group">
        <label for="email" class="label-primary">Email</label>
        <input type="email" name="email" id="email" class="input-primary" placeholder="user@dragbin.com" required
          autofocus>
      </div>

      <div class="form-group">
        <label for="password" class="label-primary">Password</label>
        <input type="password" id="password" name="password" class="input-primary" placeholder="******" required>
      </div>
      <button class="btn-primary btn-block" type="submit">Masuk</button>
		</form>
	</div>
</body>
</html>
