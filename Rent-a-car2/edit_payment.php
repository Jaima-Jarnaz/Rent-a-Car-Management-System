<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Payment update</title>

<header><div class="nav">
</header>
<center>
<form method="post" action="">
    <table align=center>
       <tr>
           <td>Payment Date</td>
           <td><input type="text" name="feild1" value=""></td>
       </tr>
       <tr>
           <td>Customer Name</td>
           <td><input type="text" name="feild2" value=""></td>
       </tr>
	   <tr>
           <td>Payment Type</td>
           <td><input type="text" name="feild3" value=""></td>
       </tr>
        <tr>
           <td>Amount</td>
           <td><input type="text" name="feild4" value=""></td>
       </tr>
        <tr>
           <td>Description</td>
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

$sql = "SELECT * FROM tb_payment";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  echo"<table style='width:990px; margin:auto; color:#314954; padding:5px; font-size:15px; border-color:darkgrey;border: currentColor;background-color: #d8dbe845;' border='5'>";
    echo"<tr><th colspan='8'><h1>Payment Records</h1></th></tr>";
    echo"<tr>";
    echo"<td><h2>Payment Date</h2></td>";
    echo "<td><h2>Customer Name</h2></td>";
    echo "<td><h2>Payment Type</h2></td>";
    echo "<td><h2>Amount</h2></td>";
    echo "<td><h2>Description</h2></td>";
    echo "</tr>";
    echo "<br><br>";
     //<table><tr><th>Name</th><th>ID</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo "<tr>
    <td>"  . $row["PaymentDate"]."    </td>
    <td>"  . $row["CustomerName"]."  </td>
    <td>"  . $row["PaymentType"]."    </td>
    <td>"  . $row["Amount"]."  </td>
    <td>"  . $row["Description"]."  </td>
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

$Program_d = $_POST['feild1'];
$Program_cus = $_POST['feild2'];
$Program_pt = $_POST['feild3'];
$Program_a = $_POST['feild4'];
$Program_des = $_POST['feild5'];

$sql = "UPDATE tb_payment SET PaymentDate='$Program_d', CustomerName='$Program_cus',PaymentType='$Program_pt',Amount='$Program_a',Description='$Program_des' where CustomerName='".$Program_cus."'";
// $ID, $Name, $Address, $Contact
if ($conn->query($sql) === TRUE) {
    echo "<h2 align=center> Your Information Update successfully</h2>";
} else {
    if ($Program_d== "" || $Program_cus== ""||$Program_pt==""||$Program_a==""||$Program_des=="") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>

</body>
</html>
