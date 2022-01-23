<?php
session_start();
	$username =  $_REQUEST['name'];
	$pw = $_REQUEST['pw'];


$conn = new mysqli("localhost", "root", "", "registerdatabase");
	if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

	$sql = "select * from registration where username = '".$username."' AND password = '".$pw."' ";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==1){
		$_SESSION['user'] = "$username";
		$_SESSION['suc-msg'] = "Login Successfully!!";
		header("Location: home.php");
	}
	
	else {
		$_SESSION['fail-msg'] = "Incorrect Username or Password!!";
		header("Location: login.php");
		}

mysqli_close($conn);
?>