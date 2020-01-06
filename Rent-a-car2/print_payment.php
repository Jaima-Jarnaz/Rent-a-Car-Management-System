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
        <h2 align="center"> Payment Information</h2>
        <table border="1" align="center">
    	
          <?php
          $id = $_GET["CustomerName"];
          $sql = "SELECT * FROM tb_payment WHERE `CustomerName` = '$id'";
          $result = mysqli_query($conn, $sql);

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