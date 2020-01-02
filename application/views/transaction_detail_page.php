<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Rincian suatu transaksi milik anda di dragbin.">
    <meta name="author" content="tandry syawaludin">
	<title>Rincian Transaksi</title>
	
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
                    <a class="nav-link" href="/index.php/home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php/profile">Profil</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php/transaction_list">Transaksi <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a href="<?php echo base_url(), "index.php/signin/revoke_auth_authentication" ?>" class="btn btn-outline-secondary my-2 my-sm-0" role="button">Keluar</a>
        </div>
    </nav>

    <div class="container">
          
        <div class="row mt-4">
            <div class="col-md-4 offset-md-3 col-sm-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link transaction-menu" href="/index.php/transaction_list">
                            < Kembali
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <?php if (sizeof($transaction) > 0) { ?>
                    <ul class="list-unstyled">
                        <li class="media post-container mb-4">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0"><?php echo $currency.number_format($transaction->total_pay) ?></h5>
                                <span class="badge badge-dark">
                                    <?php 
                                    if ($transaction->status === "finding_partner") {
                                        echo "Sedang mencari mitra";
                                    }
                                    else if ($transaction->status === "got_partner") {
                                        echo "Mitra ditemukan";
                                    }
                                    else if ($transaction->status === "picking_up") {
                                        echo "Sedang menjemput";
                                    }
                                    else if ($transaction->status === "completed") {
                                        echo "Transaksi berhasil";
                                    }
                                    ?>
                                </span>
                                <div><small class="text-muted"><?php echo date('m/d/Y H:i:s', strtotime($transaction->updated_at)) ?></small></div>
                                <hr/>
                                <p class="transaction-description">
                                    <?php echo $transaction->description ?>
                                </p>
                                <hr/>
                                <p class="transaction-description">
                                    <?php echo "<span class='text-muted'>", isset($transaction->seller_name) ? "Penjual: </span> {$transaction->seller_name}" : "Pembeli: </span> {$transaction->buyer_name}" ?><br/>
                                </p>
                                
                                <?php if (isset($transaction->seller_name) && $transaction->status === "finding_partner" ) { ?>
                                    <form action="update_status_transaction" method="POST">
                                        <input type="hidden" name="transaction_id" value="<?php echo $transaction->id ?>" />
                                        <input type="hidden" name="transaction_status" value="picking_up" />
                                        <button type="submit" class="btn btn-success btn-sm">Menuju lokasi</button>
                                    </form>
                                <?php } ?>
                                
                                <?php if (isset($transaction->seller_name) && $transaction->status === "picking_up" ) { ?>
                                    <form action="update_status_transaction" method="POST">
                                        <input type="hidden" name="transaction_id" value="<?php echo $transaction->id ?>" />
                                        <input type="hidden" name="transaction_status" value="completed" />
                                        <button type="submit" class="btn btn-success btn-sm">Transaksi berhasil</button>
                                    </form>
                                <?php } ?>
                            </div>
                        </li>
                    </ul>
                <?php 
                }
                else {
                    echo "Tidak ada transaksi.";
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