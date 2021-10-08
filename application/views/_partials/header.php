<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/favicon.ico') ?>">
 
    <title>Sticky Footer Navbar Template for Bootstrap</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">
 
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap.min.css') ?>" rel="stylesheet">
 
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/sticky-footer-navbar.css') ?>" rel="stylesheet">
	
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/jquery-3.2.1.slim.min.js') ?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap.min.js') ?>"></script>
  </head>
 
  <body>
 
    <header>
      <!-- Fixed Navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Ini Template Pertama Saya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/page/index">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/page/profil">Profil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/page/about">About</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>