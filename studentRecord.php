<?php
include("./admininclude\header.php");
include("dbConnection.php");
?>

<div class="col-sm-9 mt-5">
 <!-- Table-->
  <p class="bg-dark text-white p-2 text-center">List of Students</p>

<?php 
$sql='SELECT * FROM student';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{

?>

  <table class="table" >
    <thead>
      <tr>
        <th scope="col">Student Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result))
    {
      echo '<tr>';
      echo '<th scope="row">'.$row["stu_id"].' </th>';
      echo '<td>'.$row["stu_name"].'</td>';
      echo '<td>'.$row["stu_email"].' </td>';
     echo  '<td>';
        echo '
        
        <form action="" method="POST" class="d-inline">
        <input type="hidden" name="id" value='.$row["stu_id"].'>
        <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
          <i class="far fa-trash-alt"></i>
        </button>
        </form>';
      echo '</td>';
      echo '</tr>';
    }
    
    ?>
    </tbody>

  </table>

  <?php }
  else { echo "0 Result"; }


  if(isset($_REQUEST['delete']))
  {
    $sql="DELETE FROM student WHERE stu_id={$_REQUEST['id']}";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
    }
    else{
      echo "Unable to Delete Data";
    }
  }
  ?>
</div>
</div>
<!--Div class from header-->
<div>
  <!--<a class="btn btn-danger box" href="addnewstudent.php">
    <i class="fas fa-plus fa-2x"></i>
  </a>-->
</div>
</div>
<!--div Conatiner-fluid close from header-->




<?php
include("afooter.php");
?>