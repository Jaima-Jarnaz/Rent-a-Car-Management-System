<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'db_car_bj');
$sql="DELETE FROM tb_payment WHERE CustomerName='$_GET[CustomerName]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=payment_view.php");
else 
     echo"not deleted";
?>