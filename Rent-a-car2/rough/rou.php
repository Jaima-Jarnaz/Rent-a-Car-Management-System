LEFT OUTER JOIN payment ON tb_customer.CompanyCustomerName=tb_payment.CustomerName;



///LEFT OUTER JOIN tb_employee ON tb_product.pid=tb_employee.PID)';




//$sql = 'SELECT  member.Member_ID,member.Member_Name, member.Member_Address, member.Member_Contact,Program.Program_Name,Payment.Payment_Method,Payment.Total_Amount
   //FROM ((member INNER JOIN Program ON member.Member_ID = Program.Program_No)
              //INNER JOIN Payment ON member.Member_ID = Payment.Payment_Id)';




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
$sql ='SELECT tb_customer.CompanyCustomerName,tb_trip.TripType,tb_trip.DriverName,tb_trip.CarRegistrationNo
FROM (tb_customer 
LEFT OUTER JOIN tb_trip 
ON tb_customer.CarRegistrationNo=tb_trip.CarRegistrationNo)';


$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
  echo "<center>";
  echo "<table align=center border=1 ><tr>
  <th>Customer Name</th>
  <th>Trip Type</th>
  <th>DriverName</th>
  <th>CarRegistrationNo</th>
  </tr>";
    // output data of each row
   while($row = $result->fetch_assoc()) 
   {
    echo "<tr>
    <td>".$row["CompanyCustomerName"]."</td>
    <td>".$row["TripType"]."</td>
    <td>".$row["DriverName"]."</td>
    <td>".$row["CarRegistrationNo"]."</td>";
    echo "</tr>";
    }
    echo "</table>";
  echo "</center>";
}
else {
    echo "0 results";
}


mysqli_close($conn);
?>


  echo "total".$data['sumcontact'];
   echo "<tfoot>
    <tr>
    <th colspan="7" rowspan="1">total</th>
      <th> "total".$data['sumcontact']</th>;
    </tr>
  </tfoot>";





  <?php 
include('header.php');
?>
 
<body>
<br>
<br>
<div class="container">
	<div class="alert alert-success">Sum the Numbers in a Column</div>
	<br />
	<table  class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Amount</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$query=mysql_query("select * from product")or die(mysql_error());
				while($row=mysql_fetch_array($query)){
				$id=$row['product_id'];
			?>
			<tr>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['qty'] ?></td>
				<td><?php echo $row['Price'] ?></td>
				<td><?php echo $row['amount'] ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php
		$result = mysql_query("SELECT sum(amount) FROM product") or die(mysql_error());
		while ($rows = mysql_fetch_array($result)) {
	?>
	<div class="pull-right">
		<div class="span">
			<div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total:&nbsp;<?php echo $rows['sum(amount)']; ?></div>
		</div>
	</div>
	<?php }
 
	$result1 = mysql_query("SELECT sum(qty) FROM product") or die(mysql_error());
	while ($rows1 = mysql_fetch_array($result1)) {
	?>	
	<div class="pull-right">
		<div class="span">
			<div class="alert alert-info"><i class="icon-credit-card icon-large"></i>&nbsp;Total number of Items:&nbsp;<?php echo $rows1['sum(qty)']; ?></div>
		</div>
	</div>
	<?php } ?>
</div>
</body>
</html>


LEFT OUTER 


<div class="container" data-aos="flip-up">
          <br>
          <br>
          <h1>Pamyent Information</h1>
          <div class="back">
            <a class="btn btn-light" href="success.php">Back</a>
          </div>
          <div class="insert">
            <a class="btn btn-success" href="payment_information_form.php">Insert Payment</a>
          </div>
          <!--table name-->
          <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Student id</th>
                <th scope="col">Student name</th>
                <th scope="col">Payment Date</th>
                <th scope="col">Payment month</th>
                <th scope="col">Amount</th>
                <th scope="col">Due</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row=mysqli_fetch_assoc($query)){
              ?>
              <tr>
                <td>
                  <?php echo $row['Stu_id']; ?>
                </td>
                <td>
                  <?php echo $row['Student_name']; ?>
                </td>
                <td>
                  <?php echo $row['Payment_Date']; ?>
                </td>
                <td>
                  <?php echo $row['Payment_month']; ?>
                </td>
                <td>
                  <?php echo $row['Amount']; ?>
                </td>
                <td>
                  <?php echo $row['Due']; ?>
                </td>
                <td>
                  <a class="btn btn-info btn-sm" href="payment_information_indiView.php?Payment_id=<?php echo $row['Payment_id']; ?>">View</a>
                  <a class="btn btn-success btn-sm" href="payment_edit.php?Payment_id=<?php echo $row['Payment_id']; ?>">Edit</a>
                  <a class="btn btn-danger btn-sm" href="payment_delete.php?Payment_id=<?php echo $row['Payment_id']; ?>" onclick="return confirm('Are You sure?')">Delete</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

<?php
$hostname='localhost';
$user='root';
$password='';
$db_name='db_car_bj';

$connection=mysqli_connect($hostname,$user,$password,$db_name);
if(!$connection){
	die('Unable to connect: '.mysqli_connect_error());
}
if(isset($_POST['email'])){
    
    $uname=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from admin_login where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        header("Location:Dashboard2.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>



<?php
require_once('function.php');
session_start();
if($_SERVER['REQUEST_METHOD']!="POST")
{
	header("Location:login1.php");
}
else
{
	$email=$_POST['email'];
	$password=$_POST['password'];

	$count=checkMail($email);

	$userPassowrd=getPassword($email);

	if($count>0)
	{
		$password=sha1($password);

	if($email == $count && $password==$userPassowrd)
	{
		$_SESSION['email']=$email;
		$_SESSION['password']=$password;
		header("Location:Dashboard2.php");
		var_dump($_SESSION);
	}
	else
	{
		die("Email or Password Wrong!");
	}
    }
else
{
	die("Email not found!");
}
}