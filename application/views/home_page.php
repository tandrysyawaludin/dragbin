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
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="message">Message</a>
                </li>
            </ul>
            <a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Sign Out</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <ul class="list-unstyled">
                    <?php foreach($posts as $post) {?>
                    <li class="media mt-4 post-container">
                        <img src="<?php echo base_url(), "assets/images/{$post['user_photo']}" ?>" class="img-patner rounded mr-3" alt="img">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0"><?php echo $post['user_name'] ?></h5>
                            <?php foreach(explode(',', $post['post_categories']) as $category) { ?>
                                <a href="#" class="badge badge-warning"><?php echo $category ?></a>
                            <?php } ?>
                            <div><small class="text-muted"><?php echo date('m/d/Y H:i:s', strtotime($post['post_created_at'])) ?></small></div>
                            <hr/>
                            <p>
                                <?php echo trim(preg_replace('/\s\s+/', ' ', $post['post_description'])) ?>
                            </p>
                            <p>
                                <?php echo $post['user_address'] ?>
                                <a href="<?php echo $post['user_map_link']?>" class="badge badge-link">goto map</a>
                            </p>
                            <a href="https://wa.me/62<?php echo $post['user_whatsapp']?>" class="btn btn-success btn-sm">Whatsapp</a>
                            <a href="<?php echo $post['user_facebook']?>" class="btn btn-success btn-sm">Facebook</a>
                            <a href="<?php echo base_url()?>index.php/show_phone_number" class="btn btn-success btn-sm">Phone Number</a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
                <?php if(sizeof($posts) > 0) { ?>
                    <a href="https://dragbin.com/index.php/home?page=<?php echo $next_page ?>" class="btn btn-secondary btn-block" role="button">See more</a>
                <?php } else { ?>
                    <a href="https://dragbin.com/index.php/home?page=<?php echo ($current_page-1) ?>" class="btn btn-secondary btn-block" role="button">Go to previous</a>
                <?php } ?>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>