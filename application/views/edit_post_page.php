<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="dragbin is an application which help future of recycle">
    <meta name="author" content="tandry syawaludin">
	<title>Post</title>
	
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
                    <a class="nav-link" href="<?php echo base_url()?>index.php/home">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url()?>index.php/profile">Profil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>index.php/transaction-list">Transaksi</a>
                </li>
            </ul>
            <a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Sign Out</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12">
                
                <!-- Profile Detail -->
                <form class="media mt-4 post-container" action="save_updated_post" method="POST">
                    <div class="media-body">
                        <h5 class="mt-0 mb-4">Pengajuan</h5>
                        
                        <div class="form-group">
                            <label for="description" class="col-sm-12 col-form-label">Berat</label>
                            <div class="input-group col-sm-12">
                                <input class="form-control" name="weight" id="weight" type="number" value="<?php echo $post['weight'] ?>" />
                                <div class="input-group-append">
                                    <span class="input-group-text">Kg</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="col-sm-12 col-form-label">Description</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="description" name="description"><?php echo $post['description'] ?></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pickup_date" class="col-sm-12 col-form-label">Tanggal Pengambilan</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="pickup_date" id="pickup_date" required>
                                    <?php
                                    for ($x = 1; $x <= 7; $x++) {
                                        $pickup_date=date('d M Y', strtotime(+$x." day"));
                                        echo "<option value='$pickup_date'>$pickup_date</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pickup_time" class="col-sm-12 col-form-label">Waktu Pengambilan</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="pickup_time" id="pickup_time" required>
                                    <?php
                                    for ($x = 0; $x < 10; $x=$x+2) {
                                        $pickup_time=sprintf('%02d:00 - %d:00', ($x+8), ($x+10)).' WIB';
                                        echo "<option value='$pickup_time'>$pickup_time</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="col-sm-12 col-form-label">Categories</label>
                            <div class="col-sm-12">
                                <div class="row">
                                <?php 
                                if(sizeof($post['categories']) > 0) {
                                    foreach(explode(',', $post['categories']) as $post_categories) { ?>
                                        <div class="col-sm-3">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text enable-checkbox">
                                                        <input type="checkbox" name="categories[]" aria-label="Checkbox for following text input" value="<?php echo strtoupper($post_categories) ?>" checked>
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
                                                <div class="input-group-text enable-checkbox">
                                                    <input type="checkbox" name="categories[]" aria-label="Checkbox for following text input" value="<?php echo strtoupper($unchecked_category) ?>">
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
                            <div class="col-sm-12">Active</div>
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="is_active" value="1" <?php echo $post['is_active'] ? "checked" : "" ?>>
                                </div>
                            </div>
                        </div>
  
                        <div class="form-group mt-5">
                            <div class="col-sm-12">
                                <button type="submit" class="form-control btn btn-warning">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>