<?php
session_start();
$con = mysqli_connect('localhost','root','achar');
mysqli_select_db($con, 'user_registration');

$emailid = $_POST['emailid'];
$pass = $_POST['password'];

$s = "SELECT *from users where email_id = '$emailid'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['name_error'] = "Email ID already Exists";
	header("Location: signup.php");
}
else
{
	echo "yes";
	$reg = "INSERT into users(email_id, password) values ('$emailid','$pass')";
	mysqli_query($con, $reg);
	unset($_SESSION['name_error']);
	header("Location: index.php");
	//$name_error = "Email ID already Exists";
	exit();
}
?>