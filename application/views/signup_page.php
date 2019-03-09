<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="dragbin is an application which help future of recycle">
        <meta name="author" content="tandry syawaludin">
        <title>Sign Up</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo base_url()?>assets/styles/signin.css" rel="stylesheet" crossorigin="anonymous">
    </head>
    
    <body class="text-center">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">dragbin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                </ul>
                <a href="<?php echo base_url()?>index.php/signin">
                    <button class="btn btn-warning my-2 my-sm-0" type="submit">Sign In</button>
                </a>
            </div>
        </nav>

        <form class="form-signin row" method="POST" action="<?php echo base_url()?>index.php/signup/create_user">
            <div class="col-md-12"><h3>Sing Up</h3></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email address *</label>
                    <input name="email" type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                </div>
                
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input name="password" type="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                
                <div class="form-group">
                    <label for="phone_number">Phone Number *</label>
                    <input name="phone_number" type="text" id="phone_number" class="form-control" placeholder="Phone Number" required>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input name="name" type="text" id="name" class="form-control" placeholder="Name" required>
                </div>
                
                <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input name="whatsapp" type="text" id="whatsapp" class="form-control" placeholder="Whatsapp">
                </div>
                
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input name="facebook" type="text" id="facebook" class="form-control" placeholder="Facebook">
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address">Address *</label>
                    <textarea name="address" type="text" id="address" class="form-control" placeholder="Address" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="map_link">Map Link</label>
                    <textarea name="map_link" type="text" id="map_link" class="form-control" placeholder="Map Link"></textarea>
                </div>
            </div>
            
            <div class="col-md-12">
                <button class="btn btn-lg btn-warning btn-block" type="submit">Sign Up</button>
            </div>
        </form>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>