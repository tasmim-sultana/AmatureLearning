<?php
if(!isset($_SESSION))
{
    session_start();
}
include("./admininclude\header.php");
include_once("dbConnection.php");
if(isset($_SESSION['is_admin_login']))
{
    $admiEmail=$_SESSION['adminLogEmail'];
}
else{
    echo "<script> location.href='index.php'; </script>";
}
?>

<div class="col-sm-9 mt-5" style="float:right" >
 <!-- Table-->
  <p class="bg-dark text-white p-2 text-center">Students Feedback</p>

<?php
   $sql="SELECT * FROM feedback";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0) 
   {
?>
       <table class="table">
       <thead>
       <tr>
       <th scope="col">Feedback Id</th>
       <th scope="col">Content</th>
       <th scope="col">Student Id</th>
       <th scope="col">Action</th>
       </tr>
       </thead>
       <tbody>
      <?php while($row=mysqli_fetch_assoc($result))
       {
           echo '<tr>';
           echo '<th scope="row">'.$row["f_id"].'</th>';
           echo '<td>'.$row["f_content"].'</td>';
           echo '<td>'.$row["stu_id"].'</td>';
           echo '<td> <form action="" method="POST" class="d-inline"> <input type="hidden" name="id" value='.$row["f_id"].'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>
           </tr>';
         } 
         ?>
         </tbody>
         </table>
<?php
   }
   else
   {
       echo "0 Result";
   }
    if(isset($_REQUEST['delete']))
    {
        $fid=$_REQUEST["id"];
        $sql="DELETE FROM feedback WHERE f_id='$fid'";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo '<meta http-equiv="refersh" content="0;URL=?deleted"/>';
        }
        else
        {
            echo "Unable to Delete Data";
        }
    }
?>
</div>

<?php
include("afooter.php");
?>