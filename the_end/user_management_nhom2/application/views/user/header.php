<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Bảo Hưng</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/baohung/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/baohung/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/baohung/<?php echo base_url() ?>assets/baohung/css/owl.carousel.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/baohung/css/animate.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/baohung/css/resetDefalt.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/baohung/css/setmedia.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/baohung/css/nav-menu.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/baohung/css/style.css"/>


</head>

<body>
    <style type="text/css">
        header {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            display: block;
            background: white;
            -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
        }
    </style>
<!-- Header-->
<header>
    <section class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="address-top pull-left">
                            <li><a href="tel:0962 510 568" title=""><i class="fa fa-phone" aria-hidden="true"></i>0962 510 568</a></li>
                            <li class="hidden-xs"><i class="fa fa-envelope-o" aria-hidden="true"></i>ctcpbaohung@gmail.com</li>
                        </ul>
                        <ul class="social pull-right">
                            <li><a href="" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="" title=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="" title=""><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                            <li><a href="" title=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li>
                                <form action="" class="form-search hidden-xs pull-right">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="top-center">
            <div class="visible-xs menu_mb">
                <div class="">
                    <button class="nav-toggle">
                        <div class="icon-menu">
                            <span class="line line-1"></span>
                            <span class="line line-2"></span>
                            <span class="line line-3"></span>
                        </div>
                    </button>
                    <a href="<?php echo base_url() ?>admin/home"><img src="<?php echo base_url() ?>assets/baohung/img/logo.png" alt=""/></a>
                </div>
                <div class="clearfix-10"></div>
                <div class="col-xs-12">
                    <form action="" class="form-search-sm visible-xs pull-right">
                        <div class="input-group">
                            <input type="text" class="form-control" id="" placeholder="Tìm kiếm">
                            <div class="input-group-addon btn btn-search-top">
                                <button class="">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <section class="header-center">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </section>
        </section>
        <div class="clearfix"></div>
        <section id="menu-main">
            <div class="container">
                <!-- /menu_mb -->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-1 hidden-xs">
                        <div class="logo-pc">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <a href="<?php echo base_url() ?>admin/home" title=""><img class="img-responsive" src="<?php echo base_url() ?>assets/baohung/img/logo.png" alt=""/></a>
                                </div>
                                <div class="col-lg-9 col-md-9 hidden-sm">
                                    <div class="name-cty">
                                        <a href="">
                                            <span class="color-cty" style="margin-left: 100px;">BẢO HƯNG</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-11 col-xs-12">
                        <div class="menu_main pull-right">
                            <nav class="nav is-fixed" role="navigation">
                                <div class="wrapper wrapper-flush">
                                    <div class="nav-container">
                                        <ul class="nav-menu menu">
                                           <?php 
                                                if(isset($session['level']) && $session['level'] == 1) { ?>
                                                 <li class="menu-item active">
                                                <a href="<?php echo base_url() ?>admin/home" class="menu-link">Trang chủ</a>
                                            </li>
                                                    <li class="menu-item has-dropdown">
                                                        <a href="<?php echo base_url() ?>admin/crawler/banhangindex" class="menu-link">Hệ thống bán hàng</a>
                                                        <ul class="nav-dropdown menu clearfix">
                                                            <li class="menu-item">
                                                                <a href="<?php echo base_url() ?>admin/crawler/banhangview" class="menu-link">View Product</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item "><a href="<?php echo base_url() ?>logout" class="menu-link">Đăng suất</a></li>
                                        
                                            <?php    } else if(isset($session['level']) && $session['level'] == 2) { ?>
 <li class="menu-item active">
                                                <a href="<?php echo base_url() ?>admin/home" class="menu-link">Trang chủ</a>
                                            </li>
                                        
                                            <li class="menu-item has-dropdown">
                                                <a href="<?php echo base_url(); ?>admin/crawler/hvolindex" class="menu-link ">Hệ thống Hvol</a>
                                                <ul class="nav-dropdown menu clearfix">
                                                    <li class="menu-item">
                                                        <a href="<?php echo base_url() ?>admin/crawler/hvolindex/hvolview" class="menu-link">HvolView</a>
                                                    </li>
                                                </ul>
                                            </li>
                                             <li class="menu-item">
                                                <a href="<?php echo base_url() ?>admin/crawler/chitkitsaindex" class="menu-link">Hệ thống Chitkitsa</a>
                                            </li>
                                           
                                            <li class="menu-item "><a href="<?php echo base_url() ?>logout" class="menu-link">Đăng suất</a></li>
                                            <?php } else if(isset($session['level']) && $session['level'] == 3) { ?>
<li class="menu-item active">
                                                <a href="<?php echo base_url() ?>admin/home" class="menu-link">Trang chủ</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="<?php echo base_url() ?>admin/user" class="menu-link">Quản lý user</a>
                                            </li>
                                            <li class="menu-item has-dropdown">
                                                <a href="<?php echo base_url(); ?>admin/crawler/hvolindex" class="menu-link ">Hệ thống Hvol</a>
                                                <ul class="nav-dropdown menu clearfix">
                                                    <li class="menu-item">
                                                        <a href="<?php echo base_url() ?>admin/crawler/hvolindex/hvolview" class="menu-link">HvolView</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="<?php echo base_url() ?>admin/crawler/chitkitsaindex" class="menu-link">Hệ thống Chitkitsa</a>
                                            </li>
                                            <li class="menu-item has-dropdown">
                                                <a href="<?php echo base_url() ?>admin/crawler/banhangindex" class="menu-link">Hệ thống bán hàng</a>
                                                <ul class="nav-dropdown menu clearfix">
                                                    <li class="menu-item">
                                                        <a href="<?php echo base_url() ?>admin/crawler/banhangview" class="menu-link">View Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item "><a href="<?php echo base_url() ?>logout" class="menu-link">Đăng suất</a></li>
                                        
                                            <?php }
                                           ?>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    </section>
</header>
<div class="clearfix"></div>
<!-- End Header-->
<!-- End Main -->
