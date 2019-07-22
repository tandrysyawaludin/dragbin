<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="dragbin is an application which help future of recycle">
    <meta name="author" content="tandry syawaludin">
	<title>Home</title>
	
	<link href="<?php echo base_url()?>assets/styles/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="<?php echo base_url()?>assets/styles/home.css" rel="stylesheet" crossorigin="anonymous">
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
                    <a class="nav-link" href="/index.php/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php/transaction_list">Transaction</a>
                </li>
            </ul>
            <a href="/index.php/signin/revoke_auth_authentication" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Sign Out</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12 mb-4">
                
                <form action="search_post" method="GET" class="mt-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search address" name="address" required minlength=5>
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                        </div>
                    </div>
                    <small class="text-muted">min input 5 characters</small>
                </form>

                <?php if (sizeof($posts) > 0) { ?>
                    <ul class="list-unstyled">
                        <?php foreach($posts as $post) { ?>
                            <li class="media post-container mt-4">
                                <img src="<?php echo base_url(), "assets/images/{$post['user_photo']}" ?>" class="img-patner rounded mr-3" alt="img">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0"><?php echo $post['user_name'] ?></h5>

                                    <small class="text-muted">
                                        <?php echo date('m/d/Y H:i:s', strtotime($post['post_created_at'])) ?> ·
                                        <b><?php echo $post['post_type'] == "buy" ? "BELI" : "JUAL" ?></b>
                                    </small>
                                    
                                    <p class="post-description">
                                        <span class="description-text">
                                            <span class="text-muted">Kategori:</span> <?php echo $post['post_categories'] ?>
                                        </span>
                                        <span class="description-text">
                                            <span class="text-muted">Deskripsi:</span> <?php echo $post['post_description'] ?>
                                        </span>
                                        <span class="description-text">
                                            <span class="text-muted">Alamat:</span> <?php echo $post['user_address'] ?>
                                        </span>
                                        <a href="<?php echo $post['user_map_link']?>" class="badge badge-link">goto map</a>
                                    </p>
                                    
                                    <?php if (!empty(trim($post['user_whatsapp']))) { ?>
                                        <a href="https://wa.me/62<?php echo $post['user_whatsapp']?>" class="btn btn-success btn-sm mt-1">Whatsapp</a>
                                    <? } ?>
                                    <?php if (!empty(trim($post['user_facebook']))) { ?>
                                        <a href="<?php echo $post['user_facebook']?>" class="btn btn-success btn-sm mt-1">Facebook</a>
                                    <? } ?>
                                    <a href="<?php echo "profile/show_phone_number?code=", base64_encode($post['user_id']) ?>" class="btn btn-success btn-sm mt-1">Phone Number</a>
                                    
                                    <?php if ($post['user_id'] !== $curr_user_id) { ?>
                                        <a href="<?php echo '/index.php/transaction_list/create_offer?pc=', $post['user_partner_code']?>" class="btn btn-success btn-sm mt-1">Offer</a>
                                    <?php } ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php 
                }
                else {
                    echo "<div class='mt-4'>No post available</div>";
                }
                ?>
                <?php 
                    if(sizeof($address) > 0) {
                        if(sizeof($posts) > 0) { ?>
                            <a href="/index.php/search_post?address=<?php echo $address ?>&page=<?php echo $next_page ?>" class="btn btn-secondary btn-block mt-2" role="button">See more</a>
                        <?php }
                        else { ?>
                            <a href="/index.php/search_post?address=<?php echo $address ?>&page=<?php echo ($current_page-1) ?>" class="btn btn-secondary btn-block mt-2" role="button">Go to previous</a>
                        <?php }
                    }
                    else {
                        if(sizeof($posts) > 0) { ?>
                            <a href="/index.php/home?page=<?php echo $next_page ?>" class="btn btn-secondary btn-block mt-2" role="button">See more</a>
                        <?php }
                        else { ?>
                            <a href="/index.php/home?page=<?php echo ($current_page-1) ?>" class="btn btn-secondary btn-block mt-2" role="button">Go to previous</a>
                        <?php }
                    }
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>