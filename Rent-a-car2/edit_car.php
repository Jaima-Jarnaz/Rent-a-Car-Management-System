<?php
$CarRegistrationNo=$_GET['CarRegistrationNo'];
$con = mysqli_connect('localhost','root','','db_car_bj');
$sql="SELECT * FROM tb_car WHERE CarRegistrationNo=$CarRegistrationNo";
$result=mysqli_query($con, $sql);
$equipment_information=mysqli_fetch_assoc($result);

if(isset($_POST['CarRegistrationNo'])){
$ModelNo=$_POST['ModelNo'];
$EngineNo=$_POST['EngineNo'];
$OwnerShipHire=$_POST['OwnerShipHire'];

$sql="UPDATE tb_car SET ModelNo='$ModelNo',EngineNo='$EngineNo',OwnerShipHire='$OwnerShipHire' WHERE CarRegistrationNo=$CarRegistrationNo";
mysqli_query($con, $sql);
header('Location:car_list.php?CarRegistrationNo='.$CarRegistrationNo);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>car_information_Update</title>
  </head>
  <body>
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-2">
          <br>
          <a href="car_list.php" class="btn btn-success">Back</a>
        </div>
        <div class="col-md-8">
          
          <h1>Car information update</h1>
          <table class="table">
            <form action="" method="POST">
            <tr>
              <th class="text-right">Car_Model:</th>
              <td>
                <input type="varchar" name="car_model" value="<?php echo $equipment_information['ModelNo']?>" class="form-control">
              </td>
            </tr>
            <tr>
              <th class="text-right">Car_Engine_No:</th>
              <td><input type="varchar" name="car_eng" value="<?php echo $equipment_information['EngineNo']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Owner Ship:</th>
              <td><input type="varchar" name="car_owner" value="<?php echo $equipment_information['OwnerShipHire']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right"></th>
              <td><input class="btn btn-info" type="submit" value="submit"></td>
            </tr>
          </form>
          </table>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>