<?php
session_start();
//if(!isset($_SESSION['username']))
	//header("Location: index.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="home.js"></script>

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<nav class="navbar navbar-light navbar-expand-lg bg-light">
		<h3 class="display-3 mx-auto">Logger</h3>
		<!--<a href="index.php ml-auto" class="logout">Logout</a>-->
		<button class="logout btn btn- btn-outline-success" onclick="logouttomain()">Logout</button>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-block btn-lg btn-success">
					<p class="lead">Create a Logger</p>
				</button>
			</div>
		</div>
	</div>
	<div class="container-fluid logs">
		<div class="row">
			<h1 class="heading-2 display-4">Your loggers</h1>
			<hr class="hori">
		</div>
		<div class="row">
			<div class="col-sm-10">
				<h1>Logger name</h1>
			</div>
			<div class="col-sm-2">
				<img src="plus.png">
			</div>
		</div>
	</div>
</html>