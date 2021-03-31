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
<form action="customer_connection.php" method="post">
    <div id="container">
		<div id="container-h2"><h2>Company Information</h2></div><br>
	  <div class="inputbox">    <input    name="feild1"                 type="text" placeholder="Company/Customer Name">    </div>
    <div class="inputbox">    <input    name="feild6"                 type="text" placeholder="Company/Customer Id">      </div>
		<div class="inputbox">    <input    name="feild2"                 type="text" placeholder="Address">                  </div>
		<div class="inputbox">    <input    name="feild3"                 type="text" placeholder="Cell Number">              </div>
		<div class="inputbox">    <input    name="feild4"                 type="text" placeholder="Email">                    </div>
		<div class="inputbox">    <input    name="feild5"                 type="text" placeholder="Car Registration No">      </div>
    <div id="save-button">
    <input  class="button" type="submit" value="Submit">
    </div>
	</div>
</form>
<!-- Footer -->
<div class="footer"><h4 style="color: green;font-size: 24px">@BJ Company</h4></div>
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