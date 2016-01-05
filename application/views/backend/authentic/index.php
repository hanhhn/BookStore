<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title> <?php if(isset($title) && !empty($title)) echo $title; else echo "Easy Admin"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php header('Content-Type: text/html; charset=utf-8'); ?>
	<base href="http://localhost:8080/bookstore/">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="template/backend/css/bootstrap.min.css" rel="stylesheet">
	<link href="template/backend/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="template/backend/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="template/backend/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="template/backend/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="template/backend/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="template/backend/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="template/backend/img/favicon.ico">
	<!-- end: Favicon -->
	<style type="text/css">
		body { background: url(template/backend/img/bg-login.jpg) !important; }
	</style>
		
		
		
</head>
<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<div style="margin: 15px 20px;">
								<?php echo validation_errors(); ?>
					</div>
					<h2>Login to admin account</h2>
					
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="authentic_email" id="username" type="text" placeholder="Email..." value="<?php echo set_value('authentic_email'); ?>" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="authentic_password" id="password" type="password" placeholder="Password..." value="<?php echo set_value('authentic_password'); ?>" />
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input name="authentic_remember" type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<input name="submit" type="submit" class="btn btn-primary" value="Login" />
							</div>
							<div class="clearfix"></div>
					</form>
				</div><!--/span-->
			</div><!--/row-->
			
		</div><!--/.fluid-container-->


	<!-- start: JavaScript-->

		<script src="template/backend/js/jquery-1.9.1.min.js"></script>
		<script src="template/backend/js/jquery-migrate-1.0.0.min.js"></script>	
		<script src="template/backend/js/jquery-ui-1.10.0.custom.min.js"></script>
		<script src="template/backend/js/jquery.ui.touch-punch.js"></script>	
		<script src="template/backend/js/modernizr.js"></script>	
		<script src="template/backend/js/bootstrap.min.js"></script>
		<script src="template/backend/js/jquery.cookie.js"></script>	
		<script src="template/backend/js/fullcalendar.min.js"></script>
		<script src="template/backend/js/jquery.dataTables.min.js"></script>
		<script src="template/backend/js/excanvas.js"></script>
		<script src="template/backend/js/jquery.flot.js"></script>
		<script src="template/backend/js/jquery.flot.pie.js"></script>
		<script src="template/backend/js/jquery.flot.stack.js"></script>
		<script src="template/backend/js/jquery.flot.resize.min.js"></script>	
		<script src="template/backend/js/jquery.chosen.min.js"></script>	
		<script src="template/backend/js/jquery.uniform.min.js"></script>		
		<script src="template/backend/js/jquery.cleditor.min.js"></script>	
		<script src="template/backend/js/jquery.noty.js"></script>	
		<script src="template/backend/js/jquery.elfinder.min.js"></script>	
		<script src="template/backend/js/jquery.raty.min.js"></script>	
		<script src="template/backend/js/jquery.iphone.toggle.js"></script>	
		<script src="template/backend/js/jquery.uploadify-3.1.min.js"></script>	
		<script src="template/backend/js/jquery.gritter.min.js"></script>	
		<script src="template/backend/js/jquery.imagesloaded.js"></script>	
		<script src="template/backend/js/jquery.masonry.min.js"></script>	
		<script src="template/backend/js/jquery.knob.modified.js"></script>	
		<script src="template/backend/js/jquery.sparkline.min.js"></script>
		<script src="template/backend/js/counter.js"></script>
		<script src="template/backend/js/retina.js"></script>
		<script src="template/backend/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
