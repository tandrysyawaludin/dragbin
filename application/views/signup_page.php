<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Daftar di dragbin dan raih kesempatan dalam kontribusi kita terhadap bumi serta dapatkan keuntung dari sampah.">
        <meta name="author" content="tandry syawaludin">
        <title>Daftar Dragbin</title>
        
        <link rel="stylesheet" href="<?php echo base_url()?>assets/styles/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo base_url()?>assets/styles/signin.css" rel="stylesheet" crossorigin="anonymous">
        
        <link rel="shortcut icon" href="<?php echo base_url(), "assets/images/favicon.jpg" ?>">
    </head>
    
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url() ?>">dragbin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>">Welcome</a>
                    </li>
                </ul>
                <a href="<?php echo base_url()?>index.php/signin">
                    <button class="btn btn-warning my-2 my-sm-0" type="submit">Masuk</button>
                </a>
            </div>
        </nav>
        
        <div class="container">
            <form class="form-signin row" method="POST" action="<?php echo base_url()?>index.php/signup/create_user">
                <div class="col-md-12"><h3>Daftar Dragbin</h3></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input name="email" type="email" id="email" class="form-control" placeholder="user@dragbin.com" required autofocus>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input name="password" type="password" id="password" class="form-control" placeholder="*****" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone_number">Nomor Telepon *</label>
                        <input name="phone_number" type="text" id="phone_number" class="form-control" placeholder="080808080808" required>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama Lengkap *</label>
                        <input name="name" type="text" id="name" class="form-control" placeholder="Mr. Dragbin" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="whatsapp">Whatsapp</label>
                        <input name="whatsapp" type="text" id="whatsapp" class="form-control" placeholder="080808080808">
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">Alamat *</label>
                        <textarea name="address" type="text" id="address" class="form-control" placeholder="Jl. dragbin nomor 1" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="map_link">Tautan Google Map</label>
                        <textarea name="map_link" type="text" id="map_link" class="form-control" placeholder="https://goo.gl/maps/uzgenk8K4Q7tihy78"></textarea>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <button class="btn btn-lg btn-warning btn-block" type="submit">Daftar</button>
                </div>
            </form>
            
            <footer class="row text-center">
                <div class="col pt-3">
                  <p>copyright 2019 | dragbin website</p>
                </div>
            </footer>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>