<?php
  $conn = mysqli_connect("localhost", "root", "", "db_car_bj");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $user_name = $_POST['user_name'];
	  $password = $_POST['password'];
	  
   $sql = "select * from login where user_name= '$user_name' and password = '$password'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   
   if($count ==1){
	   //echo "Login Success";
  header("Location:Dashboard2.php");
    var_dump($_SESSION);
   }
   else{
	   echo "login failed";
   }
   
  }

?>