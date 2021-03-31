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
 <!--Add Trip Entry  -->
    <div class="trip-entry-container">
		<h2>Add Trip Entry</h2>
		<form action="trip_connection.php" method="post">
		<div class="row">
			<div class="col-25">
				<label for="field1">Trip Type<span class="required">*</span></label>
			</div>
			<div class="col-75">
				  <input type="text" id="trip" name="field1" placeholder="Trip Type">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="field2">Driver Name</label>
			</div>
			<div class="col-75">
				  <input type="text" id="drivername" name="field2" placeholder="Driver Name">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="field2">Passenger Name</label>
			</div>
			<div class="col-75">
				  <input type="text" id="drivername" name="passenger" placeholder="Passenger Name">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="field3">CarRegistrationNo</label>
			</div>
			<div class="col-75">
				  <input  name="field3" type="text" placeholder="Car Registration No">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="field4">Date</label>
			</div>
			<div class="col-75">
				 <input type="text" id="date" name="field4" placeholder="Trip Date">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="field5">ContactRate</label>
			</div>
			<div class="col-75">
				 <input type="text" id="contactrate" name="field5" placeholder="Contact Rate">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="field6">Advance</label>
			</div>
			<div class="col-75">
				 <input type="text" id="advance" name="field6" placeholder="Advance">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="field7">Start Point</label>
			</div>
			<div class="col-75">
				 <input type="text" id="startpoint" name="field7" placeholder="Start Point">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="field8">End Point</label>
			</div>
			<div class="col-75">
				 <input type="text" id="endpoint" name="field8" placeholder="End Point">
			</div>
		</div>
		<hr>
		<div id="save-button"><input  class="button" type="submit" value="Submit"></div>
	</form>
</div>
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