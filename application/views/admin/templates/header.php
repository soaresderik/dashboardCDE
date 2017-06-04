<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>CDEAdmin">Cod. De Estagiário</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>CDEAdmin">Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>CDEAdmin/pages">Pages</a></li>
            <li><a href="<?php echo base_url(); ?>CDEAdmin/posts">Posts</a></li>
            <li><a href="<?php echo base_url(); ?>CDEAdmin/users">Users</a></li>
            <li><a href="<?php echo base_url(); ?>CDEAdmin/escrever">Escrever</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>users/register">Cadastrar Usuário</a></li>
            <li><a href="#">Bem Vindo, Andre</a></li>

            <li><a href="<?php echo base_url(); ?>login.html">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Gerencie seu site</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Add User</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
        
      </div>

      <?php if(validation_errors()): ?>
        <div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          <?php echo validation_errors(); ?>
        </div>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'. $this->session->flashdata('user_registered') .'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'. $this->session->flashdata('post_created') .'</p>'; ?>
      <?php endif; ?>
    </section>
