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
    <link href="<?php echo base_url() ?>rec/assets/css/main-en.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>rec/assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>rec/assets/css/skins/transparent.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">
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

    <style type="text/css">
  @font-face { font-family: 'gess'; src: url('http://1024-apps.com/talbnaa/rec/css/ge-ss-two-medium.otf'); }


    html, body, h1, h2, h3, h4, h5, h6, p, a, img, ul, li, hr, strong, b, input, select, textarea,a , li, .highcharts-title, .highcharts-axis-labels, .highcharts-yaxis-title {

    
    font-family: 'gess'; 

}


    </style>
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
                        
                        <h1 class="sr-only">talbna</h1>
                    </div>
                    <!-- end logo -->
                    <div class="pull-right right">
                        <!-- search box -->
                       <!--  <div class="searchbox">
                            <div id="tour-searchbox" class="input-group">
                                <input type="search" class="form-control" placeholder="enter keyword here...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div> -->
                        <!-- end search box -->
                        <!-- top-bar-right -->
                        <div class="top-bar-right">
                            
                            
                           
                            <!-- logged user and the menu -->
                            <div class="logged-user">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?php echo base_url() ?>rec/assets/img/user-avatar.png" alt="User Avatar" />
                                        <span class="name"><?php echo $session['name'] ?></span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="<?php echo base_url() ?>admin/profile">
                                                <i class="fa fa-user"></i>
                                                <span class="text">Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() ?>admin/profile">
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
                                 <a class="btn btn-default" href="<?php base_url() ?>home?lang=en">
                                    اللغة العربية
                                </a>
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

                        <?php $side = $this->database_manage->get_all_data("pages") ;

                        ?>

                        <?php for ($i = 0; $i < count($side); $i++) {
                            if($side[$i]['index_controller'] == "orders")
                            {
                                echo '<li class=""><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text">'.$side[$i]['index_controller'].'</span>
                            <i class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">

                                <li><a href="'.base_url().'admin/'.$side[$i]['index_controller'].'?lang=en"><span class="text">'.$side[$i]['index_controller'] .'</span></a></li>
                                <li><a href="'.base_url().'admin/orders/complete?lang=en"><span class="text">orders completed</span></a></li>
                                <li><a href="'.base_url().'admin/orders/cancel?lang=en"><span class="text">orders canceled</span></a></li>
                                <li><a href="'.base_url().'admin/orders/open?lang=en"><span class="text">orders waiting</span></a></li>
                                <li><a href="'.base_url().'admin/orders/delivery?lang=en"><span class="text">orders delivered</span></a></li>
                                 </ul>
                        </li>';
                            }
                            else {
                                
                            
                         ?>


                        <li class="active"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text"><?php echo $side[$i]['index_controller'] ?></span>
                            <i class="toggle-icon fa fa-angle-down"></i></a>
                            <ul class="sub-menu">

                                <li><a href="<?php echo base_url(); ?>admin/<?php echo $side[$i]['index_controller'] ?>?lang=en"><span class="text"><?php echo $side[$i]['index_controller'] ?></span></a></li>
                                <li><a href="<?php echo base_url(); ?>admin/<?php echo $side[$i]['index_controller'] ?>/add?lang=en"><span class="text"> add
                                <?php echo $side[$i]['index_controller'] ?></span></a></li>
                                
                                 </ul>
                        </li>
                            <?php }} ?>

                               
                         <li class="active"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text">clients</span>
                            <i class="toggle-icon fa fa-angle-down"></i></a>
                            <ul class="sub-menu">

                                <li><a href="<?php echo base_url(); ?>admin/clients?lang=en"><span class="text">clients</span></a></li>
                            
                                 </ul>
                        </li>
                        <li class="active"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text">drivers</span>
                            <i class="toggle-icon fa fa-angle-down"></i></a>
                            <ul class="sub-menu">

                                <li><a href="<?php echo base_url(); ?>admin/clients/drivers?lang=en"><span class="text">drivers</span></a></li>
                                <li><a href="<?php echo base_url(); ?>admin/clients/add?lang=en"><span class="text">add driver</span></a></li>
                                 </ul>
                        </li>

                         <li class="active"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text">statistics</span>
                            <i class="toggle-icon fa fa-angle-down"></i></a>
                            <ul class="sub-menu">

                                <li><a href="<?php echo base_url(); ?>admin/statitcs?lang=en"><span class="text">for application</span></a></li>
                            
                                 </ul>
                        </li>

                    <li class="active"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text">notification</span>
                            <i class="toggle-icon fa fa-angle-down"></i></a>
                            <ul class="sub-menu">

                                <li><a href="<?php echo base_url(); ?>admin/notification?lang=en"><span class="text">notification</span></a></li>
                            
                                 </ul>
                        </li>


                       
                    </ul>
                </nav>
                <!-- /main-nav -->
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
