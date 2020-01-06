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
?>
 
      <div id="printableArea">
        <h2 align="center"> Car Information</h2>
        <table border="1" align="center">
    	
          <?php
          $id = $_GET["CarRegistrationNo"];
          $sql = "SELECT * FROM tb_customer WHERE `CarRegistrationNo` = '$id'";
          $result = mysqli_query($conn, $sql);

          if ($result->num_rows > 0) {
              echo "<table align=center border='1' cellpadding='10'><tr><th>Car Registration No</th><th>Company/Customer Id</th><th> Address</th><th>Cell Number</th><th>Email</th><th>Car Registration No</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                  <td>" . $row["CompanyCustomerName"]. "</td>
                  <td>" . $row["CustomerId"].           "</td>
                  <td>" . $row["Address"].          "</td>
                  <td>" .$row["CellNumber"].      "</td>
                  <td>" .$row["Email"].      "</td>
                  <td>" .$row["CarRegistrationNo"].      "</td>
                  </tr>";

              }
              echo "</table>";
          }
          else {
              echo "0 results";
          }

          mysqli_close($conn);
          ?>
        </table>
      </div>

      <br><br>
      <center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script>