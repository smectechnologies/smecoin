<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Fontfaces CSS -->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">

    <!-- Bootstrap 4.1 CSS -->
    <link href="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css') ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS -->
    <link href="<?= base_url('assets/vendor/animsition/animsition.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/wow/animate.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/slick/slick.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/select2/select2.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') ?>" rel="stylesheet" media="all">

    <!-- Main CSS -->
    <link href="<?= base_url('assets/css/theme.css') ?>" rel="stylesheet" media="all">

    


</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="<?= base_url('dashboard') ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>My Account</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Earnings</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Withdraw</a>
                        </li>
                        <li>
                            <a href="<?= base_url('EarnCoins') ?>">
                                <i class="fas fa-calendar-alt"></i>Earn Coins</a>
                        </li>
                        
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?= base_url('dashboard') ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>My Account</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Earnings</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Withdraw</a>
                        </li>
                        <li>
                        <a href="<?= base_url('EarnCoins') ?>">
                                <i class="fas fa-calendar-alt"></i>Earn Coins</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->



        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                    
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="<?= base_url('logout') ?>">Logout</a>
                                                    </h5>
                                                   
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->