<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="teal darken-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo white-text"><img src="<?php echo base_url(); ?>assets/img/logosmall.png" class="responsive-img" style="margin-top: -12px;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url(); ?>blog" class="white-text">Blog</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url(); ?>home" class="white-text">Home</a></li>
      </ul>
      

      <ul id="nav-mobile" class="side-nav white-text">
        <li><a href="#">Home</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

