<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Forget</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="KingAdmin Dashboard">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="<?php echo base_url() ?>rec/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>rec/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>rec/assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>rec/assets/css/skins/transparent.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>rec/assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>rec/assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>rec/assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url() ?>rec/assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="<?php echo base_url() ?>rec/assets/ico/favicon.png">
      <style type="text/css">
  @font-face { font-family: 'gess'; src: url('<?php echo base_url() ?>rec/css/ge-ss-two-medium.otf'); }


    html, body, h1, h2, h3, h4, h5, h6, p, a, img, ul, li, hr, strong, b, input, select, textarea,a , li, .highcharts-title, .highcharts-axis-labels, .highcharts-yaxis-title {

    
    font-family: 'gess'; 

}


    </style>
</head>

<body>
	<div class="wrapper full-page-wrapper page-auth page-login text-center">
		<div class="inner-page">
			<div class="logo">
				<a href="#" style="font-size: 18px;color: white;font-weight: bold;">خدماتي</a>
			</div>
			
			<div class="login-box center-block">
				<form class="form-horizontal" role="form" method="post">
					<p class="title" style="float: right; direction: rtl;">استخدم بريدك الالكتروني</p>
					<div class="form-group">
						<label for="username" class="control-label sr-only">البريد الاكتروني</label>
						<div class="col-sm-12">
							<div class="input-group">
								<input type="email" placeholder="البريد الالكتروني" name="email" id="username" class="form-control" style="float: right; direction: rtl;">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
							</div>
						</div>
					</div>
					
				
					<button class="btn btn-custom-primary btn-lg btn-block btn-auth" name="submit"><i class="fa fa-arrow-circle-o-right"></i> استعادة</button>
				</form>
				<!-- <div class="links">
					<p><a href="<?php echo base_url() ?>admin/register">انشاء حساب جديد</a></p>
				</div> -->
			</div>
		</div>
	</div>
	<footer class="footer">&copy; 2014-2015 The Develovers</footer>
	<!-- Javascript -->
	<script src="<?php echo base_url() ?>rec/assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url() ?>rec/assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url() ?>rec/assets/js/plugins/modernizr/modernizr.js"></script>
</body>

</html>
