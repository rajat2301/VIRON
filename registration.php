<?php
session_start();
	$username =  $_POST['name'];
	$pw = $_POST['pw'];
	$cpw = $_POST['cpw'];
	$email = $_POST['email'];



$conn = new mysqli("localhost", "root", "", "registerdatabase");
	if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}


if($pw==$cpw)
{
	$sql = "INSERT INTO registration (username, password, email ) VALUES ('$username', '$pw','$email')";
	if (mysqli_query($conn, $sql)) {
		
 	$_SESSION['suc-msg'] = "Registered Successfully!!";
	header("Location: login.php");
	} 
	else {
		$_SESSION['fail-msg'] = "User Already Exist!!";
		header("Location: register.php");

	}
}
else
{
	$_SESSION['fail-msg'] = "Password Do Not Match!!";
	header("Location: register.php");
}



mysqli_close($conn);
?>