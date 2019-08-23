<!DOCTYPE html>
<html class="app-ui">
    <head>
     <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Company Compliance</title>

        <meta name="description" content="AppUI - Frontend Template & UI Framework" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="<?php echo base_url(); ?>/assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

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
        <script src="<?php echo base_url(); ?>/assets/js/app.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/app-custom.js"></script>
    </head>
    <body class="app-ui">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default p-y">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <!-- Header logo -->
                                <a class="navbar-brand" href="javascript:void(0)">
                                    <img align="left" class="img-responsive" src="<?php echo base_url(); ?>/assets/img/logo/logo.png" title="AppUI" alt="AppUI" />
                                </a>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <!-- Header search form -->
                                <form class="navbar-form navbar-right app-search-form" role="search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                                            <span class="input-group-btn">
								<button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
                                        </div>
                                    </div>
                                </form>

                                <!-- Header navigation menu -->
                                <ul id="main-menu" class="nav navbar-nav navbar-right">

                                    <li>
                                        <a href="<?php echo base_url(); ?>">Home</a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url(); ?>about">About</a>
                                    </li>
                                    
                                    <li>                                        
                                        <a href="<?php echo base_url(); ?>login">Login</a>
                                    </li>
                                    
                                    <li>
                                       <a href="<?php echo base_url(); ?>register">Register</a>
                                    </li>
                                </ul>
                                <!-- End header navigation menu -->
                            </div>
                        </div>
                        <!-- .container -->
                    </nav>
                    <!-- .navbar -->
                </header>
                <!-- End header -->


