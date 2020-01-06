<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'db_car_bj');
$sql="DELETE FROM tb_driver WHERE CarRegistrationNo='$_GET[CarRegistrationNo]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=driver_list.php");
else 
     echo"not deleted";
?>