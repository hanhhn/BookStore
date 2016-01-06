<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php if(isset($title) && !empty($title)) echo $title; else echo "Easy Admin"; ?></title>
    <?php header('Content-Type: text/html; charset=utf-8'); ?>
	<title></title>
	<base href="http://localhost:8080/bookstore/">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="template/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/frontend/css/ownstyle.css">
    <link rel="stylesheet" href="template/frontend/css/effect.css">
    <link rel="stylesheet" href="template/frontend/css/responsive.css">
    <link rel="stylesheet" href="template/frontend/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
	<body>
		<header>
			<div class="row">
				<div class="container">
					<div class="col-xs-12">
						<div class="head-top">
							<ul class="head-social unliststyle">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-youtube"></i></a></li>
							</ul>
							<ul class="head-account unliststyle">
								<li><a href="">
									<i class="fa fa-sign-in"></i>
									<span>Đăng Nhập</span>
								</a></li>
								<li><a href="">
									<i class="fa fa-user-plus"></i>
									<span>Đăng Ký</span>
								</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="head-logo">
							<a href="">eShop</a>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="head-search">
							<input type="text">
							<button>Search</button>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="head-hotline">
							<i class="fa fa-phone"></i>
							<span>(08) 372 52002</span>
						</div>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<div class="row">
				<div class="container">
					<div class="col-xs-3">
						<h4 class="category-head">
							<i class="fa fa-bars"></i>
							<span>Category</span>
						</h4>
					</div>
					<div class="col-xs-7">
						<ul class="navigation unliststyle">
							<li class="nav-item"><a href="">
								<i class="fa fa-home"></i>
								<span>Home</span>
							</a></li>
							<li class="nav-item"><a href="">News</a></li>
							<li class="nav-item"><a href="">Sale</a></li>
							<li class="nav-item"><a href="">About</a></li>
							<li class="nav-item"><a href="">Contact</a></li>
						</ul>
					</div>
					<div class="col-xs-2">
						<div class="cart">
							<h4 class="cart-head">
								<i class="fa fa-shopping-cart"></i>
								<span>0 Item</span>
								<i class="fa fa-angle-down"></i>
							</h4>
							<ul class="cart-product">
								<li class="cart-item unliststyle">
									<p>Your cart emtry</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<?php
			if(isset($template) && !empty($template))
				$this->load->view($template);
		?>
		<footer>
			<div class="row">
				<div class="container">
					<div class="col-xs-6">
						<div class="about">
							<h4 class="about-head">About</h4>
							<p class="about-content">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="subscribe">
							<h4 class="subscribe-head"></h4>
							<div class="subscribe-content tab" data-tabcontrol="tabcontrol2" id="tabcontrol2">
								<ul class="tab-control">
									<!-- <li class="tab-header">The Electronics Store</li> -->
									<li class="tab-page active" data-tab="tab-1">Newsletter</li>
									<li class="tab-page" data-tab="tab-2">Subscribe</li>
									<li class="tab-page" data-tab="tab-3">Contact</li>
								</ul>
								<div class="tab-content">
									<div id="tab-1" class="page-content active">
										1
									</div>
									<div id="tab-2" class="page-content">
										<div class="subscrible">
											<input type="text">
											<button>Subscribe</button>
										</div>
									</div>
									<div id="tab-3" class="page-content">4</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="col-xs-3">
						<h4 class="bot-head">Navigation</h4>
						<ul class="unliststyle bot-content">
							<li><a href="">Home</a></li>
							<li><a href="">News</a></li>
							<li><a href="">Sale</a></li>
							<li><a href="">About</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					</div>
					<div class="col-xs-3">
						<h4 class="bot-head">Category</h4>
						<ul class="unliststyle bot-content">
							<li><a href="">Category item</a></li>
							<li><a href="">Category item</a></li>
							<li><a href="">Category item</a></li>
							<li><a href="">Category item</a></li>
							<li><a href="">Category item</a></li>
						</ul>
					</div>
					<div class="col-xs-3">
						<h4 class="bot-head">Account</h4>
						<ul class="unliststyle bot-content">
							<li><a href="">Register</a></li>
							<li><a href="">Login</a></li>
							<li><a href="">Check out</a></li>
						</ul>
					</div>
					<div class="col-xs-3">
						<h4 class="bot-head">Follow</h4>
						<ul class="unliststyle bot-content">
							<li><a href="">Facebook</a></li>
							<li><a href="">Google plus</a></li>
							<li><a href="">Twitter</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="col-xs-12">
						<p class="copyright">Copyright &copy; 2015 | Electronics.vn - Team thích vui ve~</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="template/frontend/js/jquery-1.11.3.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="template/frontend/js/bootstrap.min.js"></script>
		<script src="template/frontend/js/ownscript.js"></script>
		<script src="template/frontend/js/slide-show.js"></script>
	</body>
</html>