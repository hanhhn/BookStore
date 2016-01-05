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
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Easy</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-bell"></i>
								<span class="badge red">
								7 </span>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-calendar"></i>
								<span class="badge red">
								5 </span>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>								
							</ul>
							
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
								<span class="badge red">
								4 </span>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="template/backend/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
							</ul>
						</li>
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>Super Admin
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
			<div class="row-fluid">
					
				<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<div class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">
							<li><a href="index.html"><i class="icon-book"></i><span class="hidden-tablet"> Book</span></a></li>	
							<li><a href="index.php/admin/category"><i class="icon-envelope"></i><span class="hidden-tablet"> Category</span></a></li>
							<li><a href="index.php/admin/kind"><i class="icon-envelope"></i><span class="hidden-tablet"> Kind</span></a></li>
							<li><a href="index.php/admin/author"><i class="icon-envelope"></i><span class="hidden-tablet"> Author</span></a></li>
							<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Kind Of Book</span></a></li>
							<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
							<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
								<ul>
									<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
									<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
									<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
								</ul>	
							</li>
						</ul>
					</div>
				</div>
				<!-- end: Main Menu -->
				
				<noscript>
					<div class="alert alert-block span10">
						<h4 class="alert-heading">Warning!</h4>
						<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
					</div>
				</noscript>
				
				<!-- start: Content -->
				<div id="content" class="span10">
					<?php if(isset($template) && !empty($template)) $this->load->view($template); ?>
				</div><!--/span-->
			<!-- end: Content -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	<div class="clearfix"></div>
	<footer>
		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>			
		</p>

	</footer>
	
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
