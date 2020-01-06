<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Trip update</title>

<header><div class="nav">
</header>
<center>
<form method="post" action="">
    <table align=center>
       <tr>
           <td>Trip Type</td>
           <td><input type="text" name="feild1" value=""></td>
       </tr>
       <tr>
           <td>Driver Name</td>
           <td><input type="text" name="feild2" value=""></td>
       </tr>
	   <tr>
           <td>Car Registration No</td>
           <td><input type="text" name="feild3" value=""></td>
       </tr>
        <tr>
           <td>Date</td>
           <td><input type="text" name="feild4" value=""></td>
       </tr>
        <tr>
           <td>ContactRate</td>
           <td><input type="text" name="feild5" value=""></td>
       </tr>
       <tr>
           <td>Advance</td>
           <td><input type="text" name="feild6" value=""></td>
       </tr>
       <tr>
           <td>Start Point</td>
           <td><input type="text" name="feild7" value=""></td>
       </tr>
       <tr>
           <td>End Point</td>
           <td><input type="text" name="feild8" value=""></td>
       </tr>
       <tr>
           <td></td>
           <td><input type="submit" name="submit" value="submit" value=""></td>
       </tr>
    </table>
</form>
</center>
</article>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_car_bj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tb_trip";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  echo"<table style='width:1043px; margin:auto; color:#314954; padding:5px; font-size:11px; border-color:darkgrey;border: currentColor;background-color: #d8dbe845;' border='5'>";
    echo"<tr><th colspan='8'><h1>Trip record</h1></th></tr>";
    echo"<tr>";
    echo"<td><h2>Trip Type</h2></td>";
    echo "<td><h2>Driver Name</h2></td>";
    echo "<td><h2>Car Registration No</h2></td>";
    echo "<td><h2>Trip Date</h2></td>";
    echo "<td><h2>Contact Rate</h2></td>";
    echo "<td><h2>Advance</h2></td>";
    echo "<td><h2>Start Point</h2></td>";
    echo "<td><h2>End Point</h2></td>";
    echo "</tr>";
    echo "<br><br>";
     //<table><tr><th>Name</th><th>ID</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo "<tr>
    <td>"  . $row["TripType"]."    </td>
    <td>"  . $row["DriverName"]."  </td>
    <td>"  . $row["CarRegistrationNo"]."    </td>
    <td>"  . $row["TripDate"]."    </td>
    <td>"  . $row["ContactRate"]."    </td>
    <td>"  . $row["Advance"]."    </td>
    <td>"  . $row["StartPoint"]."  </td>
    <td>"  . $row["EndPoint"]."  </td>
    </tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  <br><br>






<div style="text-align: center;">
    <button type="button" onclick="location.href='http://localhost/Rent-a-car2/Dashboard2.php'">Back</button>
</div>
</table>


<?php
if(isset($_POST['submit'])){
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_car_bj";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}

$Program_Name = $_POST['feild1'];
$Program_no = $_POST['feild2'];
$Program_cr = $_POST['feild3'];
$Program_licence_no = $_POST['feild4'];
$Program_LicenseExpireDate = $_POST['feild5'];
$Program_FatherName=$_POST['feild6'];
$Program_MotherName=$_POST['feild7'];
$Program_NID=$_POST['feild8'];

$sql = "UPDATE tb_trip SET DriverName='$Program_Name', MobileNo='$Program_no',CarRegistrationNo='$Program_cr',LicenseNumber='$Program_licence_no',LicenseExpireDate='$Program_LicenseExpireDate',FatherName='$Program_FatherName',MotherName='$Program_MotherName',NID='$Program_NID' where CarRegistrationNo='".$Program_cr."'";
// $ID, $Name, $Address, $Contact
if ($conn->query($sql) === TRUE) {
    echo "<h2 align=center> Your Information Update successfully</h2>";
} else {
    if ($Program_Name== "" || $Program_no== ""||$Program_cr==""||$Program_licence_no==""||$Program_LicenseExpireDate==""||
      $Program_FatherName==""||$Program_MotherName=""||$Program_NID=="") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>

</body>
</html>
