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
	echo"";
}
$sql="INSERT INTO tb_trip(TripType,DriverName,CarRegistrationNo,TripDate,ContactRate,Advance,StartPoint,EndPoint)
VALUES('$_POST[field1]','$_POST[field2]','$_POST[field3]','$_POST[field4]','$_POST[field5]','$_POST[field6]','$_POST[field7]',
'$_POST[field8]')";
if(mysqli_query($conn,$sql))
{
	echo"";
}
else
{
	echo"not connected";
}
mysqli_close($conn);

?>