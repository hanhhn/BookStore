<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="http://localhost:8080/project-english/"/>
		<title><?php if(isset($title)) echo $title; else echo "page"; ?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="template/frontend/css/bootstrap.min.css">
	    <link rel="stylesheet" href="template/frontend/css/font-awesome.min.css">
		<link rel="stylesheet" href="template/frontend/css/ourstyle.css">
		<link rel="stylesheet" href="template/frontend/css/responsive.css">
		<link rel="stylesheet" href="template/frontend/css/hover.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="template/frontend/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header class="row">
			<div class="container">
				<ul class="nav-top">
					<li><a href="#">payment</a></li>
					<li><a href="#">contact us</a></li>
					<li><a href="authentic/login">login</a></li>
					<li><a href="authentic/register">register</a></li>
				</ul>
			</div>
		</header>
		<nav class="row">
			<div class="container">
				<div class="logo">
					<a href=""><img src="template/frontend/assets/logo/logo.png" alt=""></a>
				</div>
				<button type="button" class="btn-toggle navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="menubar" id="menu-collapse">
					<ul>
						<li><a class="underline-left getting-started" href="home/gettingstart">getting started</a></li>
						<li><a class="underline-left vocabulary" href="vocabulary">vocabulary</a></li>
						<li><a class="underline-left grammar" href="grammar">grammar</a></li>
						<li style="padding-right: 0px;"><a class="underline-left entertainerment" href="entertainment">entertainment</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<?php if(isset($template) && !empty($template)) $this->load->view($template, isset($data)?$data:NULL);?>
		<footer class="row">
			<div class="container">
				<div class="col-md-6 col-xs-12 col-sm-12">
					<div class="logo-footer">
						<a href=".">
							<img src="template/frontend/assets/logo/logo.png" alt="">
						</a>
						<p style="margin-top: 10px;">
							Copyright&copy 2012-2015 E-learning.
						</p>
					</div>
				</div>
				<div class="col-md-2 col-xs-6 col-sm-4">
					<div class="navbar-footer icon-footer">
						<h4>Categories</h4>
						<article>
							<a href="">
								<i class="fa fa-long-arrow-right"></i>
								Vocabulary
							</a>
						</article>
						<article>
							<a href="">
								<i class="fa fa-long-arrow-right"></i>
								Grammar
							</a>
						</article>
						<article>
							<a href="">
								<i class="fa fa-long-arrow-right"></i>
								Entertainment</a>
						</article>
					</div>
				</div>
				<div class="col-md-2 col-xs-6 col-sm-4">
					<div class="contact-footer icon-footer">
						<h4>Contact us</h4>
						<article>
							<a href="">
								<i class="fa fa-phone-square"></i>
								Hotline
							</a>
						</article>
						<article>
							<a href="">
								<i class="fa fa-envelope"></i>
								Email
							</a>
						</article>
						<article>
							<a href="">
								<i class="fa fa-map-marker"></i>
								Address
							</a>
						</article>
					</div>
				</div>
				<div class="col-md-2 col-xs-12 col-sm-4">
					<div class="follow-us-social icon-footer">
						<h4>Follow us</h4>
						<article class="follow-facebook">
							<a href="#" >
								<i class="fa fa-facebook"></i>
								Facebook
							</a>
						</article>
						<article class="follow-google">
							<a href="#" >
								<i class="fa fa-google-plus"></i>
								Google Plus
							</a>
						</article>
						<article class="follow-twitter">
							<a href="" >
								<i class="fa fa-twitter"></i>
								Twitter
							</a>
						</article>
					</div>
					<div class="register-email form-class">
						
					</div>
				</div>
			</div>
		</footer>
		<script src="template/frontend/js/myscript.js"></script>
		<script src="template/frontend/js/jquery.validate.min.js"></script>
	</body>
</html>