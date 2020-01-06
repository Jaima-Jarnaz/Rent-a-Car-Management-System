<?php
require_once('config.php');
function checkmail($email){

	global $connection;
	$sql="SELECT * from admin_login where email='$email'";
	$result= mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	return $count;
}
function getPassword($email){

	global $connection;
	$sql="SELECT * from admin_login where email='$email'";
	$result= mysqli_query($connection,$sql);
	$data=mysqli_fetch_assoc($result);
	return $data['password'];
}
