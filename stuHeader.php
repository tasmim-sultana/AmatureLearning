<?php

include_once("dbConnection.php");
if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['is_login']))
{
    $stuLogEmail=$_SESSION['stuLogEmail'];
}


if(isset($stuLogEmail))
{
    $sql="SELECT stu_img FROM student WHERE stu_email='$stuLogEmail'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $stu_img=$row['stu_img'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Profile</title>

    <!-- file of bootstrap-->
    <link rel="stylesheet" href="css\bootstrap.min.css">

    <!--file of fontawesom-->
    <link rel="stylesheet" href="css\all.min.css">

    <!-- Google fONT-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">
    <!-- Link of css file -->
    <link rel="stylesheet" href="stustyle.css" type="text/css">
</head>
<body>
<!--Top Navbar--> 
<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="studentProfile.php">AmateurLearning</a>
</nav>
<!--Side bar--> 
<div class="container-fluid mb-5" style="margin-top: 40px;">
    <div class="row">
      <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
       <div class="sidebar-sticky">
         <ul class="nav flex-column">
           <li class="nav-item mb-3">
            <img src="<?php echo $stu_img ?>" alt="studentimage" class="img-thumbnail rounded-circle">
           </li>

           <li class="nav-item">
            <a class="nav-link" href="studentProfile.php">
             <i class="fas fa-user"></i> 
               Profile <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="myCourse.php">
             <i class="fab fa-accessible-icon"></i> 
            My Courses
            </a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="stufeedback.php">
             <i class="fab fa-accessible-icon"></i> 
            Feedback
            </a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="stuPassChange.php">
             <i class="fas fa-key"></i> 
            Change Password
            </a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="stulogout.php">
             <i class="fab fa-accessible-icon"></i> 
            Logout
            </a>
            </li>
          </ul>
         </div>
        </nav>  



