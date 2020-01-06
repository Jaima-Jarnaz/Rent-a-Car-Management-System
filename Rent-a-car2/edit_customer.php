<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Customer update</title>

<header><div class="nav">
</header>
<center>
<form method="post" action="">
    <table align=center>
       <tr>
           <td>Company/Customer Name</td>
           <td><input type="text" name="feild1" value=""></td>
       </tr>
       <tr>
           <td>Company/Customer Id:</td>
           <td><input type="text" name="feild6" value=""></td>
       </tr>
	   <tr>
           <td>Address</td>
           <td><input type="text" name="feild2" value=""></td>
       </tr>
        <tr>
           <td>Cell Number</td>
           <td><input type="text" name="feild3" value=""></td>
       </tr>
        <tr>
           <td>Email</td>
           <td><input type="text" name="feild4" value=""></td>
       </tr>
       <tr>
           <td>Car Registration No</td>
           <td><input type="text" name="feild5" value=""></td>
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

$sql = "SELECT * FROM tb_customer";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
     echo"<table style='width:990px; margin:auto; color:#314954; padding:5px; font-size:15px; border-color:darkgrey;border: currentColor;background-color: #d8dbe845;' border='5'>";
    echo"<tr><th colspan='6'><h1>Customer record</h1></th></tr>";
    echo"<tr>";
    echo"<td><h2>Company/Customer Name</h2></td>";
    echo "<td><h2>Company/Customer Id</h2></td>";
    echo "<td><h2>Address</h2></td>";
    echo "<td><h2>Cell Number</h2></td>";
    echo "<td><h2>Email</h2></td>";
    echo "<td><h2>Car Registration No</h2></td>";
    echo "</tr>";
    echo "<br><br>";
     //<table><tr><th>Name</th><th>ID</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo "<tr>
    <td>"  . $row["CompanyCustomerName"]."    </td>
    <td>"  . $row["CustomerId"]."  </td>
    <td>"  . $row["Address"]."    </td>
    <td>"  . $row["CellNumber"]."  </td>
    <td>"  . $row["Email"]."  </td>
    <td>"  . $row["CarRegistrationNo"]."  </td>
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
$Program_id = $_POST['feild6'];
$Program_add = $_POST['feild2'];
$Program_cell = $_POST['feild3'];
$Program_email = $_POST['feild4'];
$Program_cr=$_POST['feild5'];

$sql = "UPDATE tb_customer SET CompanyCustomerName='$Program_Name', CustomerId='$Program_id',Address='$Program_add',CellNumber='$Program_cell',Email='$Program_email' where CarRegistrationNo='".$Program_cr."'";
// $ID, $Name, $Address, $Contact
if ($conn->query($sql) === TRUE) {
    echo "<h2 align=center> Your Information Update successfully</h2>";
} else {
    if ($Program_Name== "" || $Program_No== ""||$Program_add==""||$Program_cell==""||$Program_email==""||$Program_cr=="") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>

</body>
</html>
