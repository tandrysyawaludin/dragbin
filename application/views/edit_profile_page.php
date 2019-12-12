<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="dragbin is an application which help future of recycle">
    <meta name="author" content="tandry syawaludin">
	<title>Profile</title>
	
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
                    <a class="nav-link" href="/index.php/home">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php/profile">Profile <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php/transaction_list">Transaction</a>
                </li>
            </ul>
            <a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Sign Out</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12">
                
                <!-- Profile Detail -->
                <form class="media mt-4 post-container" action="save_updated_profile" method="POST" enctype='multipart/form-data'>
                    <img src="<?php echo base_url(), "assets/images/{$user['photo']}" ?>" class="img-patner rounded mr-3" alt="img">
                    <div class="media-body">
                        <h5 class="mt-0 mb-4">Profile Detail</h5>
                        <div class="form-group row">
                            <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" id="photo" value="<?php echo $user['photo'] ?>" type="file" name="photo">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name" value="<?php echo $user['name'] ?>" type="text" name="name">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="email" value="<?php echo $user['email'] ?>" type="email" name="email">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="address" name="address"><?php echo $user['address'] ?></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="map_link" class="col-sm-2 col-form-label">Map Link</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="map_link" name="map_link"><?php echo $user['map_link'] ?></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="whatsapp" class="col-sm-2 col-form-label">Whatsapp</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="whatsapp" value="<?php echo $user['whatsapp'] ?>" name="whatsapp">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="phone_number" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="phone_number" value="<?php echo $user['phone_number'] ?>" name="phone_number">
                            </div>
                        </div>
                        
                        <?php
                            if (!empty($user['partner_code'])) { ?>
                                <div class="form-group row">
                                    <label for="partner_code" class="col-sm-2 col-form-label">Partner Code</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="partner_code" value="<?php echo $user['partner_code'] ?>" disabled>
                                        <small class="form-text text-muted">Please contact us for changing <b>partner code</b></small>
                                    </div>
                                </div>
                            <?php }
                        ?>
                        
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="form-control btn btn-warning">Save</button>
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