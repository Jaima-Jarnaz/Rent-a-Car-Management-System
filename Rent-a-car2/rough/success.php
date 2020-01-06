<?php
session_start();
if(empty($_SESSION['email'])){
	header("Location:login1.php");
}
?>
<h1>Hello<?php echo $_SESSION['email'];?></h1>
<a href="../Dashboard2.php">Student admission</a>
<a href="logout.php">Logut</a>