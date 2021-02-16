<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=$this->config->item('project_name') ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/frontend/default/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?=base_url()?>assets/frontend/default/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/frontend/default/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/frontend/default/css/landing-page.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container col-lg-12">
      <div class="col-lg-4 text-center">
        <a style="display: contents;" class="navbar-brand" href="<?=base_url()?>"><img src="<?= base_url('assets/frontend/img/logo_header.png') ?>" class="logo-light" alt="#"> <?= $this->config->item('project_name') ?></a>
      </div>
      <div class="col-lg-8 h-100 text-center text-lg-right my-auto">
        <a class="btn btn-default" href="<?=base_url('frontend/experiences')?>">Experience</a>
        <a class="btn btn-default" href="<?=base_url('frontend/projects')?>">Projects</a>
        <a class="btn btn-default" href="<?=base_url('frontend/education')?>">Education</a>
        <a class="btn btn-primary" href="<?=base_url('auth')?>">Sign In</a>
      </div>
    </div>
  </nav>
