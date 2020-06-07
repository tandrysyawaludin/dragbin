<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="dragbin is an application which help future of recycle">
    <meta name="author" content="tandry syawaludin">
	<title>Delivery Confirmation</title>
	
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
                    <a class="nav-link" href="<?php echo base_url()?>index.php/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>index.php/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url()?>index.php/transaction-list">Transaction <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Sign Out</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12">
                
                <!-- Profile Detail -->
                <form class="media mt-4 post-container" action="delivery-confirmation/create-delivery-confirmation" method="POST" enctype='multipart/form-data'>
                    <div class="media-body">
                        <h5 class="mt-0 mb-4">Delivery Confirmation</h5>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Delivery for</label>
                            <div class="col-sm-9">
                                <a href="<?php echo base_url()?>index.php/transaction-list/show_detail_transaction?id=<?php echo $transaction_id ?>&tt=from_me">
                                    https://dragbin.com/index.php/transaction-list/show_detail_transaction?id=<?php echo $transaction_id ?>&tt=from_me
                                </a>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="courier_name" class="col-sm-3 col-form-label">Courier Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="courier_name" name="courier_name" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="courier_phone_number" class="col-sm-3 col-form-label">Courier Phone Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="courier_phone_number" name="courier_phone_number" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="delivery_photo" class="col-sm-3 col-form-label">Delivery Photo</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="delivery_photo" name="delivery_photo" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="other_detail" class="col-sm-3 col-form-label">Other Detail</label>
                            <div class="col-sm-9">
                                <textarea class="form-control-file" id="other_detail" name="other_detail"></textarea>
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                                <input type="hidden" name="transaction_id" value="<?php echo $transaction_id ?>" />
                                <input type="hidden" name="status" value="paid" />
                                <button type="submit" class="form-control btn btn-warning">Confirm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>