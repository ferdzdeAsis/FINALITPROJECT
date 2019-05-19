<?php 
	include('config.php');
	session_start();

	$user_check = $_SESSION['id'];
	$userCheck_email = $_SESSION['email'];

	if(!isset($user_check) && !isset($userCheck_name)){
		header("Location: login-tenant.php");
	}
?>