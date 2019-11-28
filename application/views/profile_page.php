<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo "Profile dari {$user['name']}" ?>">
    <meta name="author" content="tandry syawaludin">
	<title>Profil</title>
	
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
                <li class="nav-item">
                    <a class="nav-link" href="home">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="profile">Profil <span class="sr-only">(current)</span></a>
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
                
                <!-- Profile Detail -->
                <div class="media mt-4 post-container">
                    <div class="media-body">
                        <h5 class="mt-0 mb-4">Profile Detail <span class="badge badge-<?php echo $user['is_blocked'] ? "danger" : "success" ?>"><?php echo $user['is_blocked'] ? "Blocked" : "Actived" ?></span></h5>
                        
                        <div class="form-group row">
                            <div class="col-sm-4 offset-md-4">
                                <img class="img-thumbnail" src="<?php echo base_url(), "user_img/{$user['photo']}" ?>">
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
                                <small class="form-text text-muted"><?php echo $user['email_verified'] ? "email has been verified" : "<form action='profile/send_verification_email' method='POST'><input type='hidden' name='user_email' value='".$user['email']."'>email has not been verified, <button type='submit' class='btn-link'>verify now</button></form>" ?></small>
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
                            <label for="partner_code" class="col-sm-2 col-form-label">Kode Mitra</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="partner_code" value="<?php echo $user['partner_code'] ?>" disabled>
                                <small class="form-text text-muted">Please contact us for changing <b>partner code</b></small>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="created_at" class="col-sm-2 col-form-label">Bergabung Sejak</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="created_at" value="<?php echo date('m/d/Y H:i', strtotime($post['created_at'])) ?>" disabled>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <a href="profile/edit_profile" class="form-control btn btn-warning">Ubah Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Post -->
                <div class="media mt-4 post-container">
                    <div class="media-body">
                        <h5 class="mt-0 mb-4">Post <span class="badge badge-<?php echo $user['is_blocked'] ? "secondary" : "success" ?>"><?php echo $user['is_blocked'] || !$post['is_active'] ? "Deactived" : "Actived" ?></span></h5>
                        <?php
                        if (isset($user['partner_code'])) { 
                        ?>
                            <div class="form-group row">
                                <label for="count_view" class="col-sm-2 col-form-label">Dilihat</label>
                                <div class="col-sm-10">
                                    <input readonly class="form-control-plaintext" id="count_view" value="<?php echo $post['count_view'] ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="description" disabled><?php echo $post['description'] ?></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
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
                            
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <a href="profile/edit_post" class="form-control btn btn-warning">Ubah Postingan</a>
                                </div>
                            </div>
                        <?php
                        }
                        else {
                        ?>
                            <p>
                                <?php echo $user['email_verified'] ? 
                                    'You are not authorized as a Partner and have a Post, please contact me for more information at&nbsp;
                                    <form action="'.base_url().'index.php/profile/request_partner_via_email" method="POST" class="form-inline">
                                        <input type="hidden" name="user_email" value="'.$user['email'].'">
                                        <input type="hidden" name="user_name" value="'.$user['name'].'">
                                        <input type="hidden" name="user_id" value="'.$user['id'].'">
                                        <button type="submit" class="btn btn-warning">Ajukan via Email</button>
                                        &nbsp;or&nbsp;
                                        <a href="https://wa.me/6288224706803?text=Akun%20["'.$user['id'].'",%20"'.$user['name'].'"]%20ingin%20mendaftar%20sebagai%20mitra" class="btn btn-warning">Ajukan via WhatsApp</a>
                                    </form>' :
                                    "<form action='profile/send_verification_email' method='POST'><input type='hidden' name='user_email' value='".$user['email']."'>Mohon verifikasi email sebelum pengajuan mitra, <button type='submit' class='btn-link'>verifikasi</button></form>"
                                ?>
                            </p>
                        <?php
                        }
                        ?>
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