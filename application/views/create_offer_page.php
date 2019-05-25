<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="dragbin is an application which help future of recycle">
    <meta name="author" content="tandry syawaludin">
	<title>Create Transaction</title>
	
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
                <li class="nav-item">
                    <a class="nav-link" href="/index.php/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php/profile">Profile</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php/transaction_list">Transaction <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Sign Out</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12">
                
                <!-- Profile Detail -->
                <form class="media mt-4 post-container" action="post_new_offer" method="POST" enctype='multipart/form-data'>
                    <div class="media-body">
                        <h5 class="mt-0 mb-4">Create Transaction</h5>
                        
                        <div class="form-group row">
                            <label for="partner_code" class="col-sm-4 col-form-label">Partner Code</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="partner_code" value="<?php echo $partner_code ?>" type="text" name="partner_code" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="total_pay" class="col-sm-4 col-form-label">Total Pay</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="total_pay" type="number" name="total_pay" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-sm-4 col-form-label">Description</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="courier_name" class="col-sm-4 col-form-label">Courier Name</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="courier_name" name="courier_name" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="courier_phone_number" class="col-sm-4 col-form-label">Courier Phone Number</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="courier_phone_number" name="courier_phone_number" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-8 offset-sm-4">
                                <button type="submit" class="form-control btn btn-warning">Save Offer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>