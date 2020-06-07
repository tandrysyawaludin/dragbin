<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Konfirmasi pembayaran transaksi.">
    <meta name="author" content="tandry syawaludin">
	<title>Konfirmasi Pembayaran</title>
	
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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>index.php/profile">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url()?>index.php/transaction-list">Transaksi <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Keluar</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12">
                
                <!-- Profile Detail -->
                <form class="media mt-4 post-container" action="payment-confirmation/create-payment-confirmation" method="POST" enctype='multipart/form-data'>
                    <div class="media-body">
                        <h5 class="mt-0 mb-4">Konfirmasi Pembayaran</h5>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pembayaran untuk</label>
                            <div class="col-sm-9">
                                <a href="<?php echo base_url()?>index.php/transaction-list/show_detail_transaction?id=<?php echo $transaction_id ?>&tt=to_me">
                                    https://dragbin.com/index.php/transaction-list/show_detail_transaction?id=<?php echo $transaction_id ?>&tt=to_me
                                </a>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="destination_account_number" class="col-sm-3 col-form-label">Rekening Tujuan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="destination_account_number">
                                    <?php foreach ($destination_account_number as $key => $value) {
                                        echo '<option value="',$value,'">',$key,' - ',$value,'</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="source_account_number" class="col-sm-3 col-form-label">Rekening Asal</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="source_account_number" name="source_account_number" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="total_payment" class="col-sm-3 col-form-label">Total Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="total_payment" name="total_payment" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="payment_slip" class="col-sm-3 col-form-label">Struk Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="payment_slip" name="payment_slip" />
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                                <input type="hidden" name="transaction_id" value="<?php echo $transaction_id ?>" />
                                <input type="hidden" name="status" value="paid" />
                                <button type="submit" class="form-control btn btn-warning">Konfirmasi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>