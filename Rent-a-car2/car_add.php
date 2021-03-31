<?php include("nav.php")?>
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
<form action="car-connection.php" method="post">
    <div id="container">
		<div id="container-h2"><h2>Car Information Create</h2></div><br>
	  <div class="inputbox"><input   type="text" placeholder="Car Registration No" name="car_reg"></div>
		<div class="inputbox"><input   type="text" placeholder="Model No"            name="car_model"></div>
		<div class="inputbox"><input   type="text" placeholder="Engine No"           name="car_eng"></div>
    <div class="inputbox"><input   type="text" placeholder="Hire/Own"            name="car_owner"></div>
    <div id="save-button">
    	<input  class="button" type="submit" value="Submit">
    </div>
	</div>
</form>
<!-- Footer -->

<footer>
  <div class="footer container-fluid">
    <h4 style="color: green;font-size: 24px">@BJ Company</h4>
  </div>
</footer>

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