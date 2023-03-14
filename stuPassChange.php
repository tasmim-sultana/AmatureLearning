<?php
if(!isset($_SESSION))
{
    session_start();
}
include("stuHeader.php");
include_once("dbConnection.php");
if(isset($_SESSION['is_login']))
{
    $stuEmail=$_SESSION['stuLogEmail'];
}
else{
    echo "<script> location.href='index.php'; </script>";
}
if(isset($_REQUEST['stuPassUpdateBtn']))
{
    if($_REQUEST['stuNewPass']=="")
    {
        $passmsg='<div class= "alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
    }
    else{

            $stu_pass=$_REQUEST['stuNewPass'];
            $sql="UPDATE student set stu_pass='$stu_pass' WHERE stu_email='$stuEmail'";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2"
                role="alert">Updated Successfully</div>';
            }
            else
            {
                $passmsg='<div class= "alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Unable to Update </div>';
            }

        }
}
?>

<div class="col-sm-6 mt-5">
 <form class="mx-5" method="POST" enctype="multipart/form-data">
   <div class="form-group">
     <label for="inputEmail">Email</label>
     <input type="text" class="form-control" id="stuId" name="stuId" value="<?php if(isset($stuEmail)){ echo $stuEmail;}?> " readonly>
    </div>

    <div class="form-group">
      <label for="inputnewpass">New Password: </label>
      <input type="password" class="form-control" id="inputnewpass" placeholder="New Password" name="stuNewPass">
    <div>
    <button type="submit" class="btn btn-primary mr-4 mt-4" name="stuPassUpdateBtn">Update</button>
    <button type="reset" class="btn btn-secondary mt-4">Reset </button>
    <?php if(isset($passmsg)) {echo $passmsg; }?>
    </form>
    </div>
   </div>
  <div> <!-- class Row Div from header file-->
  <?php
  include("stuFooter.php");
  ?>
