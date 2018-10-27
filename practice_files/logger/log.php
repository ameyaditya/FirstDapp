<?php
session_start();
$con = mysqli_connect('localhost','root','achar');
mysqli_select_db($con, 'user_registration');

$emailid = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT *from users where email_id = '$emailid' && password='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['logged_in'] = 1;
	$_SESSION['username'] = $emailid;
	unset($_SESSION['name_error']);
	header("Location: homepage.php");
}
else
{
	$_SESSION['name_error'] = "Email-ID and password dont match. Try Again";
	header("Location: login.php");
}
?>
