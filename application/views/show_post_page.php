<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo "Profil dari {$user['name']}" ?>">
    <meta name="author" content="tandry syawaludin">
	<title>Ajukan Penjualan</title>
	
	<link href="<?php echo base_url()?>assets/styles/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="<?php echo base_url()?>assets/styles/home.css" rel="stylesheet" crossorigin="anonymous">
	
	<link rel="shortcut icon" href="<?php echo base_url(), "assets/images/favicon.jpg" ?>">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">dragbin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php/transaction_list">Transaksi</a>
                </li>
            </ul>
            <a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Keluar</a>
        </div>
    </nav>
    
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12">
                
                <!-- Pengajuan Penjualan -->
                <div class="media mt-4 post-container">
                    <div class="media-body">
                        <h5 class="mt-0 mb-4">Pengajuan <span class="badge badge-<?php echo $user['is_blocked'] ? "secondary" : "success" ?>">
                            <?php 
                            if ($post['status'] === "finding_partner") {
                                echo "Sedang mencari mitra";
                            }
                            else if ($post['status'] === "got_partner") {
                                echo "Mitra ditemukan";
                            }
                            else if ($post['status'] === "picking_up") {
                                echo "Sedang menjemput";
                            }
                            else if ($post['status'] === "completed") {
                                echo "Transaksi berhasil";
                            }
                            else if ($post['is_active']) {
                                echo "Aktif";
                            }
                            ?></span>
                        </h5>
                        
                        <div class="form-group">
                            <label for="description" class="col-sm-12 col-form-label">Berat</label>
                            <div class="input-group col-sm-12">
                                <input class="form-control" id="weight" type="number" value="<?php echo $post['weight'] ?>" disabled />
                                <div class="input-group-append">
                                    <span class="input-group-text">Kg</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="col-sm-12 col-form-label">Deskripsi</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="description" disabled><?php echo $post['description'] ?></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pickup_date" class="col-sm-12 col-form-label">Tanggal Pengambilan</label>
                            <div class="col-sm-12">
                                <input class="form-control" id="pickup_date" value="<?php echo $post['pickup_date'] ?>" disabled />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pickup_time" class="col-sm-12 col-form-label">Waktu Pengambilan</label>
                            <div class="col-sm-12">
                                <input class="form-control" id="pickup_time" value="<?php echo $post['pickup_time'] ?>" disabled />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="col-sm-12 col-form-label">Kategori</label>
                            <div class="col-sm-12">
                                <div class="row">
                                <?php
                                if(sizeof($post['categories']) > 0) {
                                    foreach(explode(',', $post['categories']) as $post_categories) { ?>
                                        <div class="col-sm-3">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" checked disabled>
                                                    </div>
                                                </div>
                                                <input class="form-control" value="<?php echo strtoupper($post_categories) ?>" disabled>
                                            </div>
                                        </div>
                                    <?php } 
                                }
                                
                                foreach($unchecked_categories as $unchecked_category) { ?>
                                    <div class="col-sm-3">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" aria-label="Checkbox for following text input" disabled>
                                                </div>
                                            </div>
                                            <input class="form-control" value="<?php echo strtoupper($unchecked_category) ?>" disabled>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <a href="user_post/edit_post" class="form-control btn btn-warning">Ubah</a>
                            </div>
                        </div>
                        <!--<p>-->
                            <?php 
                            // echo $user['email_verified'] ? 
                            //     'You are not authorized as a Partner and have a Post, please contact me for more information at&nbsp;
                            //     <form action="'.base_url().'index.php/profile/request_partner_via_email" method="POST" class="form-inline">
                            //         <input type="hidden" name="user_email" value="'.$user['email'].'">
                            //         <input type="hidden" name="user_name" value="'.$user['name'].'">
                            //         <input type="hidden" name="user_id" value="'.$user['id'].'">
                            //         <button type="submit" class="btn btn-warning">Ajukan via Email</button>
                            //         &nbsp;or&nbsp;
                            //         <a href="https://wa.me/6288224706803?text=Akun%20["'.$user['id'].'",%20"'.$user['name'].'"]%20ingin%20mendaftar%20sebagai%20mitra" class="btn btn-warning">Ajukan via WhatsApp</a>
                            //     </form>' :
                            //     "<form action='profile/send_verification_email' method='POST'><input type='hidden' name='user_email' value='".$user['email']."'>Mohon verifikasi email sebelum pengajuan mitra, <button type='submit' class='btn-link'>verifikasi</button></form>"
                            ?>
                        <!--</p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>