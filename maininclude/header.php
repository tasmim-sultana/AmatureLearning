<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- file of bootstrap-->
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <!--file of fontawesom-->
  <link rel="stylesheet" src="css\all.min.css">
  <!-- Google fONT-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
  <!-- Link of css file -->
  <link rel="stylesheet" href="css\style.css" type="text/css">
  <title>QuickLearning</title>
</head>

<body>

  <!-- strat navigation-->

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">

    <a class="navbar-brand display-3" href="index.php">AmateurLearning</a>
    <span class="navbar-text"> Discover Yourself</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
        <li class="nav-item custom-nav-item ">
          <a class="nav-link" href="payment.php">Payment Status</a>
          <?php
          session_start();
          if(isset($_SESSION['is_login']))
          {
            echo '</li>
            <li class="nav-item custom-nav-item ">
              <a class="nav-link" href="studentProfile.php">My profile</a>
            </li>
            <li class="nav-item custom-nav-item ">
              <a class="nav-link" href="stulogout.php">Logout</a>
            </li>';
          }
          else{
            echo '<li class="nav-item  custom-nav-item ">
            <a class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter" href="#">Log in</a>
          </li>
          <li class="nav-item  custom-nav-item ">
            <a class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter
        " href="#">Sign Up</a>
          </li>';
          }

          ?>
        
        
        <li class="nav-item  custom-nav-item  ">
          <a class="nav-link" href="index.php">Feedback</a>
        </li>
        <li class="nav-item  custom-nav-item  ">
          <a class="nav-link" href="#contact">Contact</a>
        </li>

      </ul>
    </div>
  </nav>

  <!-- End navigation-->