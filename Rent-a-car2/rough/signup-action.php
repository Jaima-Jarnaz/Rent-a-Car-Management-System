<?php
require_once('function.php');
if($_SERVER['REQUEST_METHOD']!="POST"){
	header("Location:signup.php");
}else{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$rpassword=$_POST['rpassword'];
	$count=checkMail($email);
	if($count>0){
		die("Email already exist");
	}else{
		if($password==$rpassword){
			$password=sha1($password);
			$sql="INSERT INTO `admin_login` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
			$result=mysqli_query($connection,$sql);
			if($result)
			{
				header("Location:signup-success.php");
			}
		}else{
			die("Password Match Failed!!");
		}
	}
}