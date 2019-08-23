<!DOCTYPE html>
<html class="app-ui">
<head>
<!-- Meta -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<!-- Document title -->
<title></title>
<!-- Favicons 
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="assets/img/favicons/favicon.ico" />-->
<!-- Google fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/plugins/slick/slick.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/plugins/slick/slick-theme.min.css" />
<!-- AppUI CSS stylesheets -->
<link rel="stylesheet" id="css-font-awesome" href="<?php echo base_url(); ?>/assets/css/font-awesome.css" />
<link rel="stylesheet" id="css-ionicons" href="<?php echo base_url(); ?>/assets/css/ionicons.css" />
<link rel="stylesheet" id="css-bootstrap" href="<?php echo base_url(); ?>/assets/css/bootstrap.css" />
<link rel="stylesheet" id="css-app" href="<?php echo base_url(); ?>/assets/css/app.css" />
<link rel="stylesheet" id="css-app-custom" href="<?php echo base_url(); ?>/assets/css/app-custom.css" />
<!-- End Stylesheets -->

<!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->        
<script src="<?php echo base_url(); ?>/assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/core/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/core/jquery.scrollLock.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/core/jquery.placeholder.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/app-custom.js"></script>

<!-- Page JS Code -->
<script>
            $(function()
            {
                // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
                App.initHelpers(['datepicker']);
            });
</script>

</head>
<body class="app-ui layout-has-drawer layout-has-fixed-header">
<div class="app-layout-canvas">
  <div class="app-layout-container">
    <!-- Drawer -->
	<?php   $this->load->view('common/left-side-menu');  ?>

    <!-- End drawer -->
    <!-- Header -->
    <header class="app-layout-header">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle"> <span class="sr-only">Toggle drawer</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <span class="navbar-page-title"> Dashboard </span> </div>
          <div class="collapse navbar-collapse" id="header-navbar-collapse">
            <!-- Header search form -->
            <form class="navbar-form navbar-left app-search-form" role="search">
              <div class="form-group">
                <div class="input-group">
                  <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                  <span class="input-group-btn">
                  <button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
                  </span> </div>
              </div>
            </form>
            <!-- .navbar-left -->
            <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
              <li class="dropdown"> <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i> <span class="badge">3</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown-header">Profile</li>
                  <li> <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span> News </a> </li>
                  <li> <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> Messages </a> </li>
                  <li class="divider"></li>
                  <li class="dropdown-header">More</li>
                  <li> <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a> </li>
                </ul>
              </li>
              <li class="dropdown dropdown-profile"> <a href="javascript:void(0)" data-toggle="dropdown"> <span class="m-r-sm"><?php echo $this->session->userdata('FirstName') ?> <span class="caret"></span></span> </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown-header"> Pages </li>
                  <li> <a href="base_pages_profile.html">Profile</a> </li>
                  <li> <a href="<?php echo site_url('companyDashboard/logout')?>">Logout</a> </li>
                </ul>
              </li>
            </ul>
            <!-- .navbar-right -->
          </div>
        </div>
        <!-- .container-fluid -->
      </nav>
      <!-- .navbar-default -->
    </header>
    <!-- End header -->
    


