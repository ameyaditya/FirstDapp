<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="check.js"></script></head>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="jumbotron-fluid">
	<div class="container forms">
		<h1 class="display-4 text-center heading-1">Signup</h1>
		<form action="/sign.php" method="post" name="sign">
			<div class="form-group">
				<label for="exampleInputEmail1">Email ID</label>
				<input type="email" name="emailid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
			</div>
			<div class="form-group">
				<label for="passwd">
					Password
				</label>
				<input type="password" name="password1" class="form-control" id="passwd1" placeholder="Password" required>
			</div>
			<div class="form-group">
				<label for="passwd">
					Re-enter Password
				</label>
				<input type="password" class="form-control" name="password2" id="passwd2" placeholder="Re-enter Password" required>
			</div>
			<?php if(isset($_SESSION['name_error'])): ?>
			<span style="margin-bottom: 10px;"><?php echo $_SESSION['name_error']; ?></span>
			<?php endif ?>
			<div id="error_log" style="margin-bottom: 10px;">
				
			</div>
			<button type="submit" class="btn btn-primary btn-block" id="submit_button">		Submit
			</button>
		</form>
	</div>
</div>
</body>
</html>