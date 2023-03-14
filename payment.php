<!-- Strat of Header-->
<?php
include('maininclude\header.php');
?>

<!-- End of header-->
   

 <!-- Start of Course Banner page-->
 <div class="container-fluid bg-dark">
     <div class="row">
         <img src="images\payment.jpg" alt="Courses"
         style="height: 700px; width: 100%; object-fit: cover; box-shadow: 10px;"/>
</div>
</div>   

<!-- Start Main Content-->
<div class="container">
    <h2 class="text-center my-4">Payment Status </h2>
    <form method="post" action="">
        <div class="form-group row">
        <label class="offset-sm-3 col-form-label">Order Id: </label>

<div>
    <input type="text" class="form-control mx-3">
</div>
<div>
    <input type="submit" class="btn btn-primary mx-4" value="view">
</div>
</div>
</form>
</div>
<!-- End of Main content-->
<!-- Start of contact section-->
<?php
include('contact.php');
?>




<!-- Start of footer -->
<?php
include('maininclude\footer.php');
?>
<!-- End of footer -->


