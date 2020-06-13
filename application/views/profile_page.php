<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo "Profil dari {$user['name']}" ?>">
	<meta name="author" content="tandry syawaludin">
	<title>Profil</title>

	<link href="<?php echo base_url()?>assets/styles/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="<?php echo base_url()?>assets/styles/home.css" rel="stylesheet" crossorigin="anonymous">

	<link rel="shortcut icon" href="<?php echo base_url(), "assets/images/favicon.jpg" ?>">
</head>

<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/">dragbin</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="home">Beranda</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="profile">Profil <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url()?>index.php/transaction-list">Transaksi</a>
				</li>
			</ul>
			<a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>"
				class="btn btn-outline-secondary my-2 my-sm-0" role="button">Keluar</a>
		</div>
	</nav>

	<div class="container mb-4">
		<div class="row">
			<div class="col-md-8 offset-md-2 col-sm-12">

				<?php
          if (!empty($user["partner_code"])) {
              echo '<a href="user-post/edit-post" class="mt-4 form-control btn btn-warning">Ajukan Penjualan</a>';
          }
        ?>

				<!-- Profile Detail -->
				<div class="media mt-4 post-container">
					<div class="media-body">
						<h5 class="mt-0 mb-4">Profil <span
								class="badge badge-<?php echo $user['is_blocked'] ? "danger" : "success" ?>"><?php echo $user['is_blocked'] ? "Terblokir" : "Aktif" ?></span>
						</h5>

						<div class="form-group row">
							<div class="col-sm-4 offset-md-4">
								<div class="img-thumbnail" alt="img"
									style="background-image: url(<?php echo base_url("assets/images/".$post['user_photo']) ?>)">
								</div>
							</div>
						</div>

						<div class="form-group row">
							<label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
							<div class="col-sm-10">
								<input class="form-control" id="name" value="<?php echo $user['name'] ?>" disabled>
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input class="form-control" id="email" value="<?php echo $user['email'] ?>" disabled>
								<small
									class="form-text text-muted"><?php echo $user['email_verified'] ? "email has been verified" : "<form action='profile/send_verification_email' method='POST'><input type='hidden' name='user_email' value='".$user['email']."'>email has not been verified, <button type='submit' class='btn-link'>verify now</button></form>" ?></small>
							</div>
						</div>

						<div class="form-group row">
							<label for="address" class="col-sm-2 col-form-label">Alamat</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="address" disabled><?php echo $user['address'] ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label for="map_link" class="col-sm-2 col-form-label">Tautan Google Map</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="map_link" disabled><?php echo $user['map_link'] ?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label for="whatsapp" class="col-sm-2 col-form-label">Whatsapp</label>
							<div class="col-sm-10">
								<input class="form-control" id="whatsapp" value="<?php echo $user['whatsapp'] ?>" disabled>
							</div>
						</div>

						<div class="form-group row">
							<label for="phone_number" class="col-sm-2 col-form-label">Nomor Telepon</label>
							<div class="col-sm-10">
								<input class="form-control" id="phone_number" value="<?php echo $user['phone_number'] ?>" disabled>
							</div>
						</div>

						<div class="form-group row">
							<label for="created_at" class="col-sm-2 col-form-label">Bergabung Sejak</label>
							<div class="col-sm-10">
								<input class="form-control" id="created_at"
									value="<?php echo date('d M Y', strtotime($post['created_at'])) ?>" disabled>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-sm-10 offset-sm-2">
								<a href="profile/edit_profile" class="form-control btn btn-warning">Ubah Profil</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>

</html>