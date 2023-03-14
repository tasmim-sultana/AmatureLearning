<?php
include("dbConnection.php");
include('maininclude\header.php');
?>

<!-- End of header-->
   

 <!-- Start of Course Banner page-->
 <div class="container-fluid bg-dark">
     <div class="row">
         <img src="images\Course.jpg" alt="Courses"
         style="height: 700px; width: 100%; object-fit: cover; box-shadow: 10px;"/>
</div>
</div> 
<!-- End of course Banner page --> 
<!-- strat of Main Content--> 

<?php
if(isset($_GET['course_id']))
{
    $course_id= $_GET['course_id'];
    $sql = "SELECT * FROM course WHERE course_id='$course_id'";
    $_SESSION['course_id']=$course_id;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
}


?>

<div class="row">
    <div class="col-md-4">
    <img src="<?php echo $row['course_img']?>" class="card-img-top" alt="Guiter"/>
    </div>
    <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title">Course Name : <?php echo $row['course_name']?></h5>
        <p class="card-text"> Description: <?php echo $row['course_desc']?></p>
        <p class="card-text"> Duration:<?php echo $row['course_duration']?></p>
        <form action="checkout.php" method="post">
        <p class="card-text d-inline"> Price: <small><del>TK<?php echo $row['course_original_price'] ?> </del></small><span class="font-weight-bolder"> TK <?php echo $row['course_price']?></span></p>
       <input type="hidden" name="Price" value="<?php echo $row['course_price']?>">
        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
        </form>
        </div>
     </div>
</div>
<div class="container">
 <div class="row">
 <table class="table table-bordered table-hover">
  <thead>
    <tr>
        <th scope="col">Lesson No.</th>
        <th scope="col">Lesson name</th>
    </tr>
   </thead>
  <tbody>
 <?php 
   $sql="SELECT * FROM lesson";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)> 0)
   {
       $num=0;
       while($row=mysqli_fetch_assoc($result))
       {
           if($course_id==$row['course_id'])
           {
               $num++;
           echo '<tr>
           <th scope="row">'.$num.'</th>
           <td>'.$row['lesson_name'].'</td> 
           ';
           }
       }
   }

 ?>

 </tbody>
 </table>
 </div>
 </div>



</div>
</div>


<!-- Start of footer -->
<?php
include('maininclude\footer.php');
?>
<!-- End of footer -->




