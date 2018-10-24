<?php 
session_start();
unset($_SESSION['name_error']); ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Logger Website
	</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="jumbotron-fluid">
	<h1 class="display-4 heading">Logger</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				
				<button type="button" class="btn btn-lg btn-block">
					<a href="login.php">Login</a>
				</button>
				
				<button class="btn btn-lg btn-block">
					<a href="signup.php">Sign Up</a>
				</button>
			</div>
			<div class="col-md-2"></div>
			
		</div>
	</div>
</div>
</body>
</html>