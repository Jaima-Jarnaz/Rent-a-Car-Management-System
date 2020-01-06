<?PHP
$servername="localhost";
$username="root";
$password="";
$dbname="db_car_bj";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("error");
}
else
{
	echo"connected successfully";
}
$sql="INSERT INTO tb_car(CarRegistrationNo,ModelNo,EngineNo,OwnerShipHire)
VALUES('$_POST[car_reg]','$_POST[car_model]','$_POST[car_eng]','$_POST[car_owner]')";
if(mysqli_query($conn,$sql))
{
	echo"1 row inserted successfully";
}
else
{
	echo"not connected";
}
mysqli_close($conn);

?>