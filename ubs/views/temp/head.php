<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/adminlte/plugins/fontawesome-free/css/all.min.css');?>"> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/adminlte/plugins/jqvmap/jqvmap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/adminlte/dist/css/adminlte.min.css');?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/adminlte/plugins/daterangepicker/daterangepicker.css');?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/adminlte/plugins/summernote/summernote-bs4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/css/bootstrap.css');?>" />
        
  <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/css/dataTables.bootstrap4.min.css');?>" />
        <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/css/bootstrap.css');?>" />
        <script src="<?php echo base_url('jquery_data_table/js/jquery-3.5.1.js');?>"></script>
        <script src="<?php echo base_url('jquery_data_table/js/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo base_url('jquery_data_table/js/dataTables.bootstrap4.min.js');?>"></script>
        <script src="<?php echo base_url('jquery_data_table/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('jquery_data_table/highcharts/code/highcharts.js'); ?>"></script>
        <script src="<?php echo base_url('jquery_data_table/highcharts/code/modules/exporting.js'); ?>"></script>
        <script src="<?php echo base_url('jquery_data_table/highcharts/code/modules/accessibility.js'); ?>"></script>
        <script src="https://kit.fontawesome.com/e00232877d.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('jquery_data_table/adminlte/js/master_device.js');?>"></script>
        <script>
            $(document).ready(function(){
            $('#tabel-data').DataTable();
            });
        </script>
        


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url('jquery_data_table/adminlte/dist/img/AdminLTELogo.png');?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->
      
    </ul>
  </nav>