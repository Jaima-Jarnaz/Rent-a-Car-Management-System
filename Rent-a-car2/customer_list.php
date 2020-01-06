<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/Rent-a-car/fontawesome-free-5.11.2-web/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/driver_add2.css">
 <link rel="stylesheet" type="text/css" href="css/dashboard.css">
   <script src="https://kit.fontawesome.com/3b71e37289.js"></script>
	<title>Car Information Create</title>
</head>
<body>
<div class="wrapper">
	<!-- Sidebar/menu -->
<nav class="" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="c1-container">
    <div class="c1-img">
      <img src="img/img_avatar.png" style="border-radius: 50%;width: 46px;">
    </div>
    <div class="c1-text">
      <span>Welcome, <strong>Admin</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="c1-container">
  <a class="bar-block-item" href="Dashboard2.php"><i id="i0" class="fas fa-home"></i>Dashboard</a>
  </div>
  <div class="bar-block">
  <a class="bar-block-item" href="car_add.php">           <i id="i1" class="fas fa-car"></i>Car</a>
  <a class="bar-block-item" href="driver_add2.php">       <i id="i2" class="fas fa-user-alt"></i>Driver</a>
  <a class="bar-block-item" href="customer_add.php">      <i id="i3" class="hvr-buzz-out fa fa-male"></i>Customer</a>
  <a class="bar-block-item" href="trip_entry.php">        <i id="i4" class="far fa-plus-square"></i>Trip Entry</a>
  <a class="bar-block-item" href="localtripentry.php">    <i id="i5" class="far fa-plus-square"></i>Local Trip Entry</a>
  <a class="bar-block-item" href="*"><span>View Section</span></a>
  <a class="bar-block-item" href="car_list.php">           <i id="i1" class="fas fa-car"></i>Car List</a>
  <a class="bar-block-item" href="customer_list.php">           <i id="i1" class="fas fa-car"></i>Customer List</a>
  <a class="bar-block-item" href="driver_list.php">       <i id="i2" class="fas fa-user-alt"></i>Driver List</a>
  <a class="bar-block-item" href="Trip_list2.php">                      <i id="i6" class="fab fa-tripadvisor"></i>Trip List</a>
  <a class="bar-block-item" href="local_trip_list.php">                      <i id="i7" class="fab fa-tripadvisor"></i>Local Trip List</a>
  <a href="#" class="bar-block-item dropdown-btn">         <i id="i8" class="fas fa-money-bill"></i>Accounting </a>
  <div class="dropdown-container bar-block-item">
    <a class="bar-block-item dropdown-btn" href="#">Rececipt Info</a>
    <a class="bar-block-item dropdown-btn" href="payment_view.php">Payment Info</a>
  </div>
  <a href="#" class="bar-block-item dropdown-btn">         <i id="i9" class="far fa-address-book"></i>Reports</a>
   <div class="dropdown-container bar-block-item">
    <a class="bar-block-item dropdown-btn" href="report2.php">Genaral Reports</a>
    <a class="bar-block-item dropdown-btn" href="#">Company Bill</a>
  </div>
  </div>
</nav>
<!-- !PAGE CONTENT! -->
<div class="main">
  <!-- Header -->
  <header class="header2">
  	<div id="header-text">
    <h4><b><i class="fas fa-home"></i> My Dashboard</b></h4>
    </div>
    <div id="header-logo">
    	 <img src="img/logo4.png" style="width: 80px">
    </div>
  </header>
<hr>
<div class="add_car_container">
 <div class="buttonblock" id="addcar">
<a href="customer_add.php" class="button">Add Customer</a>
</div>
</div>




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
    echo"<tr><th colspan='9'><h1>Customer record</h1></th></tr>";
    echo"<tr>";
    echo"<td><h2>Company/Customer Name</h2></td>";
    echo "<td><h2>Company/Customer Id</h2></td>";
    echo "<td><h2>Address</h2></td>";
    echo "<td><h2>Cell Number</h2></td>";
   echo "<td><h2>Email</h2></td>";
    echo "<td><h2>Car Registration No</h2></td>";
    echo "<td><h2>Delete</h2></td>";
    echo "<td><h2>Update</h2></td>";
    echo "<td><h2>Print</h2></td>";
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
    <td><a href =delete_customer.php?CarRegistrationNo=".$row["CarRegistrationNo"].">Delete</a>     </td>
    <td><a href =edit_customer.php?CarRegistrationNo=".$row["CarRegistrationNo"].">Update</a>     </td>
    <td><a href =print_customer.php?CarRegistrationNo=".$row["CarRegistrationNo"].">Print</a> </td>
    </tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  <br><br><br><br><br><br><br>
</table>

<!-- Footer -->
<div class="footer">
  <h4 style="color: green;font-size: 24px">@BJ Company</h4></div>
</div>
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>