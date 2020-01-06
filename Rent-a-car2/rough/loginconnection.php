<?php
require_once('function.php');
session_start();
if($_SERVER['REQUEST_METHOD']!="POST"){
	header("Location:login1.php");
}else{
	$email=$_POST['email'];
	$password=$_POST['password'];

	$count=checkMail($email);

	$userPassowrd=getPassword($email);

	if($count>0){
		$password=sha1($password);

	if($email == $email && $password==$userPassowrd){
		$_SESSION['email']=$email;
		$_SESSION['password']=$password;
		header("Location:Dashboard2.php");
		var_dump($_SESSION);
	}else{
		die("Email or Password Wrong!");
	}
}else{
	die("Email not found!");
}
}