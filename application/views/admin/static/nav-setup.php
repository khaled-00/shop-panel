<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <title>Dashboard | MohamedAdmin - Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
    <meta name="author" content="The Develovers">
    <!-- CSS -->
    <link href="<?php echo base_url() ?>rec/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>rec/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>rec/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>rec/assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>rec/assets/css/skins/transparent.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]>
        <link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
    <![endif]-->

     <!-- Javascript -->
    <script src="<?php echo base_url()?>rec/assets/js/jquery/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/plugins/modernizr/modernizr.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/king-common.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/plugins/datatable/exts/dataTables.colVis.bootstrap.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/plugins/datatable/exts/dataTables.colReorder.min.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/plugins/datatable/exts/dataTables.tableTools.min.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/plugins/datatable/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>rec/assets/js/king-table.js"></script>

    
    <script src="<?php echo base_url() ?>rec/demo-style-switcher/assets/js/deliswitch.js"></script>
    <script src="<?php echo base_url() ?>rec/assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?php echo base_url() ?>rec/assets/js/plugins/stat/flot/jquery.flot.min.js"></script>
    <script src="<?php echo base_url() ?>rec/assets/js/plugins/stat/flot/jquery.flot.resize.min.js"></script>
    <script src="<?php echo base_url() ?>rec/assets/js/plugins/stat/flot/jquery.flot.time.min.js"></script>
    <script src="<?php echo base_url() ?>rec/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>rec/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

 <!-- Javascript --> <!-- Javascript --> <!-- Javascript -->

    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>rec/assets/ico/kingadmin-favicon144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>rec/assets/ico/kingadmin-favicon114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>rec/assets/ico/kingadmin-favicon72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url() ?>rec/assets/ico/kingadmin-favicon57x57.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>rec/assets/ico/favicon.png">
</head>

<body class="sidebar-fixed topnav-fixed dashboard2">
    <!-- WRAPPER -->
    <div id="wrapper" class="wrapper" style="direction:ltr">
        <!-- TOP BAR -->
        <div class="top-bar navbar-fixed-top">
            <div class="container">
                <div class="clearfix">
                    <a href="#" class="pull-left toggle-sidebar-collapse"><i class="fa fa-bars"></i></a>
                    <!-- logo -->
                    <div class="pull-left left logo">
                        <a href="#"><img src="<?php echo base_url() ?>rec/assets/img/kingadmin-logo-white.png" alt="KingAdmin - Admin Dashboard" /></a>
                        <h1 class="sr-only">KingAdmin Admin Dashboard</h1>
                    </div>
                    <!-- end logo -->
                    <div class="pull-right right">
                        <!-- search box -->
                        <div class="searchbox">
                            <div id="tour-searchbox" class="input-group">
                                <input type="search" class="form-control" placeholder="enter keyword here...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                        <!-- end search box -->
                        <!-- top-bar-right -->
                        <div class="top-bar-right">
                            
                            
                           
                            <!-- logged user and the menu -->
                            <div class="logged-user">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?php echo base_url() ?>rec/assets/img/user-avatar.png" alt="User Avatar" />
                                        <span class="name"><?php echo $session ?></span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="<?php echo base_url() ?>setup/profile">
                                                <i class="fa fa-user"></i>
                                                <span class="text">Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() ?>setup/profile">
                                                <i class="fa fa-cog"></i>
                                                <span class="text">Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() ?>admin/login/logout">
                                                <i class="fa fa-power-off"></i>
                                                <span class="text">Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end logged user and the menu -->
                        </div>
                        <!-- end top-bar-right -->
                    </div>
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- END TOP BAR -->
        <!-- LEFT SIDEBAR -->
        <div id="left-sidebar" class="left-sidebar" >
            <!-- main-nav -->
            <div class="sidebar-scroll" >
                <nav class="main-nav" >
                    <ul class="main-menu" >

                        <li>
                            <a href="#" class="js-sub-menu-toggle">
                                <span class="text">المنتجات</span>
                                <i class="toggle-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url() ?>items/add_item">
                                        <span class="text">أضافة منتج</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>items/show_items">
                                        <span class="text">المنتجات</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="#" class="js-sub-menu-toggle">
                                <span class="text">سلايدر</span>
                                <i class="toggle-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url() ?>slider/add_slide">
                                        <span class="text">اضافة سلايد</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>slider/">
                                        <span class="text">عرض</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="#" class="js-sub-menu-toggle">
                                <span class="text">المستخدمين</span>
                                <i class="toggle-icon fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url() ?>users/add_user">
                                        <span class="text">أضافة مستخدم</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>users">
                                        <span class="text">عرض المستخدمين</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo base_url() ?>login/logout">
                                <span class="text">تسجيل الخبروج</span>
                                <i class="toggle-icon fa fa-angle-down"></i>
                            </a>
                        </li>

                       
                    </ul>
                </nav>
                <!-- /main-nav -->
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
