<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	$uname = $_POST['uname'];
	$pass =  $_POST['password'];

	if (empty($uname)) {
		header("Location: login_index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login_index.php?error=Password is required");
	    exit();
	}
	
	$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

	$result = mysqli_query($conn,$sql);

	if (mysqli_num_rows($result) > 0) {
		header("Location: login_sucess.html");
		exit();
	} 
	
}else{
	header("Location: login_index.php");
	exit();
}