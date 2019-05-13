<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="dragbin is an application which help future of recycle">
    <meta name="author" content="tandry syawaludin">
	<title>History Transaction</title>
	
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
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile">Profile</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php/history_transaction">Transaction <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Sign Out</a>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4 mb-1">
            <div class="col-md-4 offset-md-3 col-sm-12">
                <a href="/index.php/history_transaction/create_transaction" class="btn btn-success btn-block" role="button">Create Transaction</a>
            </div>
            
            <div class="col-md-2 col-sm-12">
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle btn-block" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter: Created
                    </a>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/index.php/history_transaction/filter_transaction?ts=created">Created</a>
                        <a class="dropdown-item" href="/index.php/history_transaction/filter_transaction?ts=paid">Paid</a>
                        <a class="dropdown-item" href="/index.php/history_transaction/filter_transaction?ts=delivered">Delivered</a>
                        <a class="dropdown-item" href="/index.php/history_transaction/filter_transaction?ts=received">Received</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">

                <?php if (sizeof($transactions) > 0) { ?>
                    <ul class="list-unstyled">
                        <?php foreach($transactions as $transaction) { ?>
                            <li class="media post-container">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0"><?php echo $transaction['total_pay'] ?></h5>
                                    <a href="#" class="badge badge-warning"><?php echo $transaction['status'] ?></a>
                                    <div><small class="text-muted"><?php echo date('m/d/Y H:i:s', strtotime($transaction['updated_at'])) ?></small></div>
                                    <hr/>
                                    <p class="transaction-description">
                                        <?php echo $transaction['description'] ?>
                                    </p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="<?php echo "/index.php/history_transaction/", $transaction['id'] ?>" class="btn btn-success btn-sm">See more</a>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php 
                }
                else {
                    echo "No transaction available";
                }
                ?>
                <?php if(sizeof($transactions) > 0) { ?>
                    <a href="/index.php/home?page=<?php echo $next_page ?>" class="btn btn-secondary btn-block mt-4" role="button">See more</a>
                <?php } else { ?>
                    <a href="/index.php/home?page=<?php echo ($current_page-1) ?>" class="btn btn-secondary btn-block mt-4" role="button">Go to previous</a>
                <?php } ?>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>