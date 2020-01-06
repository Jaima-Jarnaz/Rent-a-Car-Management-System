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
$sql="INSERT INTO tb_customer(CompanyCustomerName,CustomerId,Address,CellNumber,Email,CarRegistrationNo)
VALUES('$_POST[feild1]','$_POST[feild6]','$_POST[feild2]','$_POST[feild3]','$_POST[feild4]','$_POST[feild5]')";
if(mysqli_query($conn,$sql))
{
	echo"Your data inserted successfully";
}
else
{
	echo"not connected";
}
mysqli_close($conn);

?>