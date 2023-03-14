<?php
include("dbConnection.php");
session_start();

if(isset($_REQUEST['buy']))
{
    $Price=$_REQUEST['Price'];
    echo $Price;
  if(!isset($_SESSION['stuLogEmail']))
  {
      echo "<script> location.href='loginOrsignup.php'</script>";
  }
  else
  {

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- file of bootstrap-->
  <link rel="stylesheet" href="css\bootstrap.min.css">

  <!--file of fontawesom-->
  <link rel="stylesheet" href="css\all.min.css">

  <!-- Google fONT-->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">
  <!-- Link of css file -->
  <link rel="stylesheet" href="adminstyle.css" type="text/css">
  <title>Checkout</title>
</head>
<body>
<?php



?>



  <!--<div class="col-sm-4 mt-5 mx-3 jumbotron center-block">-->
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6 offset-sm-3 jumbotron">
        <h3 class="text-center"> Welcome to AmateurLearning Payment Page </h3>
        <form action="checkoutAction.php" method="POST" enctype="multipart/form-data">
          <div class="form-group ">
            <label for="order_id">Order Id: </label>
            <input type="text" class="form-control" id="order_id" name="order_id" required>
          </div>
          <div class="form-group">
            <label for="email">Student Email </label>
            <input type="text" class="form-control" id="stuLogEmail" name="stuLogEmail"
              value="<?php echo $_SESSION['stuLogEmail'] ?>">
          </div>
          <div class="form-group">
            <label for="email">Prices: </label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php echo $Price ?>">
          </div>
          <div class="form-group">
            <label for="email">Enter Amount to Purches the course: </label>
            <input type="text" class="form-control" id="course_purches_price" name="course_purches_price" required>
          </div>

          <button type="submit" class="btn btn-danger" name="coursePurchesBtn"> Buy </button>
          <?php
           if(isset($msg))
           {
            echo $msg; 
           }
           ?>
        </form>

      </div>
    </div>
  </div>


  <!-- file from jqury-->
  <script src="js\jquery-3.5.1.min.js"></script>
  <!--file from bootstrap-->
  <script src="js\popper.min.js"></script>
  <script src="js\bootstrap.min.js"> </script>
  <!--file from fontawesom-->
  <script src="js\all.min.js"></script>
</body>

</html>


<?php
  }
}
?>