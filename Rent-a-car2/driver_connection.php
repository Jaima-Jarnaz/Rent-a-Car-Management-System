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
$sql="INSERT INTO tb_driver(
DriverName,MobileNo,CarRegistrationNo,LicenseNumber,LicenseExpireDate,FatherName,MotherName,NID,PresentAddress,JoiningDate)
VALUES('$_POST[field1]','$_POST[field2]','$_POST[field3]','$_POST[field4]','$_POST[field5]','$_POST[field6]','$_POST[field7]',
'$_POST[field8]','$_POST[field9]','$_POST[field10]')";
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