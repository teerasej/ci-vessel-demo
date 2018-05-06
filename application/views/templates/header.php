<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <script src="<?=base_url();?>assets/js/chart/fusioncharts.js"></script>
        <script src="<?=base_url();?>assets/js/chart/fusioncharts.charts.js"></script>
        <script src="<?=base_url();?>assets/js/chart/themes/fusioncharts.theme.fint.js"></script>
        <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
        <script src="<?=base_url();?>assets/js/fusioncharts-jquery-plugin.js"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css"/>
        <title><?php echo $title ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Vessel Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('fishingvessel') ?>">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('fishingvessel/new_vessel') ?>">Add New</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('fishingvessel/report') ?>">Report</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
