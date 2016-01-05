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
	<style>
		body {
			background-color: #fff;
		}
		section {
			margin: 100px 200px;
			border: 1px solid #ccc;
			border-radius: 10px;
			padding: 10px 80px;
			background-color: #ecf0f1;
			
		}
		
		.btn {
			display: inline-block;
			padding: 3px 6px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: 500;
			line-height: 20px;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			cursor: pointer;
			border: 1px solid #a7a9aa;
			-webkit-border-radius: 0px !important;
			border-radius: 0px !important;
			background-color: #3498db;
			color: #fff;
		}
	
		
	</style>
</head>
<body>
	<section>
		<h4>Welcome to esay system! thanks you for login own system.</h4>
		<h4>Confirm access in system, please <input type="submit" name="submit" class="btn-info btn" value="click here" /> thank you</h4>
	</section>
</body>
</html>
