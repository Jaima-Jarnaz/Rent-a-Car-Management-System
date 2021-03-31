<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/3b71e37289.js"></script>
</head>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body>
	<!-- Top container -->
<div class="wrapper container-fluid">
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
  <div class="dropdown">
      <a href="#" class="bar-block-item dropdown-btn dropdown-toggle " data-bs-toggle="dropdown" id="dropdownMenuButton1">         <i id="i8" class="fas fa-money-bill"></i>Reports</a>
      <div class="dropdown-container bar-block-item dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <a class="bar-block-item dropdown-btn dropdown-item" href="report2.php">Trip Reports</a>
        <a class="bar-block-item dropdown-btn dropdown-item" href="report3.php">Local Trip Reports</a>
        <a class="bar-block-item dropdown-btn dropdown-item" href="total_balance.php">Total Balance Sheet</a>
        <a class="bar-block-item dropdown-btn dropdown-item" href="payment_view.php">Payment Info</a>
      </div>
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

<div class="row">
    <div class="col-md-4">
      <div class="innerdiv innerdiv1">
        <div class="innerdiv-icon">
          <i class="fas fa-dungeon"></i>
        </div>
        <span><h2>Entry Section</h2></span>
      </div>  
    </div>


    <div class="col-md-4">
      <div class="innerdiv innerdiv2">
      <div class="innerdiv-icon">
      <i class="fas fa-eye"></i>
      </div>
      <span><h2>View Section</h2></span>
    </div>
    </div>



    <div class="col-md-4">
      <div class="innerdiv innerdiv3">
      <div class="innerdiv-icon">
        <i class="fas fa-coins"></i>
      </div>
      <span><h2>Accounts</h2></span>
    </div>
    </div>
</div>



<!-- Footer -->
<footer>
<div class="footer container-fluid">
  <h4 style="color: green;font-size: 24px">@BJ Company</h4>
</div>
</footer>
</div>
</div>
  <!-- End page content -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

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