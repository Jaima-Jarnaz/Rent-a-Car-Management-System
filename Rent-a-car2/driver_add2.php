<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/Rent-a-car/fontawesome-free-5.11.2-web/css/all.css">
	 <link  href="css/driver_add2.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/dashboard.css">
   <script src="https://kit.fontawesome.com/3b71e37289.js"></script>
	<title>Add Driver Information</title>
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
   <div class="driver-info-container">
		<div id="driver-info-container-h2"><h2>Add Driver Information</h2></div>
    <hr>
s
<form action="driver_connection.php" method="post">
<label for="field1"><span>Driver Name:<span class="required">*</span></span>
	<input type="text" id="inputbox" placeholder="Driver Name" name="field1" value=""/></label><br>
<label for="field2"><span>Mobile No:<span class="required">*</span></span><input type="text" id="inputbox" placeholder="Mobile No" name="field2" value=""/></label>
<br>
<label for="field3"><span>Car Registration No:<span class="required">*</span></span><input type="text" id="inputbox" placeholder="Car Registration No" name="field3" value=""/></label><br>
<label for="field4"><span>License Number: <span class="required">*</span></span><input type="text" id="inputbox" placeholder="License Number" name="field4" value=""/>
</label><br>
<label for="field5"><span>License Expire Date:<span class="required">*</span></span><input type="text" id="inputbox" placeholder="License Expire Date" name="field5" value=""/></label><br>
<label for="field6"><span>FatherName :</span><input type="text" id="inputbox" placeholder="FatherName" name="field6" value=""/></label><br>
<label for="field7"><span>Mother Name :</span><input type="text" id="inputbox" placeholder="Mother Name" name="field7" value=""/></label><br>
<label for="field8"><span>NID<span class="required">*</span></span><input type="text" id="inputbox"  placeholder="NID" name="field8" value=""/></label>
<br>
<label for="field9"><span> Present Address:</span><input type="text" id="inputbox" placeholder="Present Address" name="field9" value=""/></label><br>
<label for="field10"><span>Joining Date</span><input type="text" id="inputbox" placeholder="Joining Date" name="field10" value=""/></label><br>
		<div id="save-button">
    <input  class="button" type="submit" value="Submit">
    </div>
</div>
</form>
<!-- Footer -->
<div class="footer"><h4 style="color: green;font-size: 24px">@BJ Company</h4></div>
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