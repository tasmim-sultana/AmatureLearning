<!-- Strat of navigation-->
<?php
include('maininclude\header.php');
include("dbConnection.php");

?>
  <!-- Start vedio background-->
  <div class="container-fluid remove-vid-marg">
    <div class="div-parent">
      <video autoplay muted loop>
        <source src="vedios\Pexels Videos 2575219 (1).mp4" style="height:100%; width: 50%" type="video/mp4">
      </video>
      <div class="overlay"></div>
    </div>
    <div class="vid-content">
      <h1 class="my-content">Welcome to AmateurLearning</h1>
      <small class="my-content">Discover Yourself</small><br><br>

      <?php
      if(!isset($_SESSION['is_login']))
      {
        echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalCenter
        ">Get Started</a>';
      }
      else{
        echo '<a class="btn btn-primary mt-3" href="studentProfile.php">My profile</a>';
      }


?>
    </div>
  </div>



  <!-- End vedio background-->
  <!-- Strat Text Banner -->
  <div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
      <div class="col-sm">
        <h5> <i class="fas fa-book-open mr-3"></i> Online Courses</h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-users mr-3"></i> Expert Instruction </h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-keyboard mr-3"></i>Lifetime </h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-money-bill-wave-alt mr-3"></i>Money back</h5>
      </div>

    </div>
  </div>

  <!-- End Text Banner -->

  <!-- Start most popular courses-->
  <?php
  include('./card.php');

  ?>

    <!--End of Most Popular Coursers-->
  <!-- Start Contact us-->
  <?php
  include('./contact.php');
  ?>

  <!--End of contact us container-->

  <!--Start social Follow-->
  <div class="container-fluid bg-danger">
    <div class="row text-white text center p-1">
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-facebook"></i>
          Facebook</a>
      </div>

      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>
          Twitter</a>
      </div>

      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp-square"></i>
          Whatsapp</a>
      </div>
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>
          Instagram</a>
      </div>

    </div>
  </div>
  <!-- End of social Follow-->
  <div class="container-fluid text-center text-white bg-info p-1">
    <h1>About us</h1>
    <p>
    AmateurLearning is an online learning community with thousands of classes for creative and<br> curious people, on topics including guiter learning, design, photography, video making, Reciting, Singing, Programming,<br> and more. On AmateurLearning, millions of members come together to find inspiration and <br>take the next step in their creative journey.<br><br>
     <h3>At AmateurLearning, We inspire<h3>
     <p> So, get inspired<br> Learn new skill <br>Make new skill
  </div>
  <?php
  include('maininclude\footer.php');
  ?>