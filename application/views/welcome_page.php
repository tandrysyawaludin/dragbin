<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="dragbin is an application which help future of recycle">
    <meta name="author" content="tandry syawaludin">
	<title>Welcome to Dragbin</title>
	
	<link href="<?php echo base_url()?>assets/styles/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="<?php echo base_url()?>assets/styles/welcome.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">dragbin</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">home</a>
        <a class="nav-link" href="<?php echo base_url()?>index.php/signin">sign in</a>
        <a class="nav-link" href="<?php echo base_url()?>index.php/signup">sign up</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">dragbin</h1>
    <p class="lead">is an application which help future of recycle. You can be one of us to make earth great again and make a new opportunity from trash</p>
    <p class="lead">
      <a href="<?php echo base_url()?>index.php/signup" class="btn btn-lg btn-light">join us</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>copyright 2019 | dragbin website</p>
    </div>
  </footer>
</div>
</body>
</html>