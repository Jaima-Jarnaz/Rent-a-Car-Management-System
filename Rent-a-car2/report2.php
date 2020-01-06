<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/Rent-a-car/fontawesome-free-5.11.2-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <script src="https://kit.fontawesome.com/3b71e37289.js"></script>
</head>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
<style>
table {
 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 12px;
}

tr:nth-child(even){background-color: #9e9e9e42;}
tr:hover {background-color: #ddd;}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
	<!-- Top container -->
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
    <a class="bar-block-item dropdown-btn" href="#">Account Reports</a>
  </div>
  <a href="#" class="bar-block-item dropdown-btn">         <i id="i9" class="far fa-address-book"></i>Reports</a>
   <div class="dropdown-container bar-block-item">
    <a class="bar-block-item dropdown-btn" href="#">Genaral Reports</a>
    <a class="bar-block-item dropdown-btn" href="#">Balance Sheet</a>
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
 <div class="buttonblock">
  <div class="save-button" id="print">
       <a href="report_all_print.php" class="buttonlink">Print</a>
  </div>
  </div> 

<br>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_car_bj";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql ='SELECT tb_customer.CompanyCustomerName,tb_trip.TripType,tb_trip.TripDate,tb_trip.DriverName,tb_trip.CarRegistrationNo,tb_trip.StartPoint,tb_trip.EndPoint,tb_trip.ContactRate,tb_trip.Advance
FROM (tb_customer 
INNER JOIN tb_trip 
ON tb_customer.CarRegistrationNo=tb_trip.CarRegistrationNo)';

$result = mysqli_query($conn, $sql);

$query="select sum(ContactRate) as 'sumcontact' from tb_trip";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);



if (mysqli_num_rows($result) > 0) 
{
  echo "<center>";
  echo "<table align=center><tr>
        <th>Customer Name</th>
        <th>Trip Type</th>
        <th>Date</th>
        <th>DriverName</th>
        <th>CarRegistrationNo</th>
        <th>StartPoint</th>
        <th>EndPoint</th>
        <th>ContactRate</th>
        <th>Advance</th>
        </tr>";
    // output data of each row
   while($row = mysqli_fetch_array($result)) 
   {
    echo "<tr>
    <td>".$row["CompanyCustomerName"]."</td>
    <td>".$row["TripType"]."</td>
    <td>".$row["TripDate"]."</td>
    <td>".$row["DriverName"]."</td>
    <td>".$row["CarRegistrationNo"]."</td>
    <td>".$row["StartPoint"]."</td>
    <td>".$row["EndPoint"]."</td>
    <td>".$row["ContactRate"]."</td>
    <td>".$row["Advance"]."</td>";
    echo "</tr>";
    }
    echo "</table>";
    echo "</center>";
}
else 
{
    echo "0 results";
}

mysqli_close($conn);
?>
<div class="total_block">
    <div class="span">
      <div class="total">&nbsp;Total Contact Rate:&nbsp;<?php   echo "".$data['sumcontact']; ?></div>
    </div>
  </div>

<br> <br>
<!-- Footer -->
<footer>
<div class="footer">
  <h4 style="color: green;font-size: 24px">@BJ Company</h4>
</div>
</footer>
</div>
</div>
  <!-- End page content -->

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