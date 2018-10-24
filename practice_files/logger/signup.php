<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="jumbotron-fluid">
	<div class="container forms">
		<h1 class="display-4 text-center heading-1">Signup</h1>
		<form action="/sign.php" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">Email ID</label>
				<input type="email" name="emailid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
			</div>
			<div class="form-group">
				<label for="passwd">
					Password
				</label>
				<input type="password" name="password" class="form-control" id="passwd" placeholder="Password" required>
			</div>
			<?php if(isset($_SESSION['name_error'])): ?>
			<span><?php echo $_SESSION['name_error']; ?></span>
			<?php endif ?>
			<!--
			<div class="form-group">
				<label for="passwd">
					Re-enter Password
				</label>
				<input type="password" class="form-control" id="passwd" placeholder="Re-enter Password" required>
			</div>
		-->
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</form>
	</div>
</div>
</body>
</html>