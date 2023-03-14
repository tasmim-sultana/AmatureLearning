<!-- Strat of Header-->
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
<!--End of course Banner -->

<div class="container jumbotron mb-5">
 <div class="row">
  <div class="col-md-4">
   <h5 class="mb-3">If Already Registered !! Login </h5>
   <form id="stuLoginForm" action="loginstu.php" method="POST">

            <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="stulogemail" class="p1-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="stulogemail" id="stulogemail" required>

            </div>

            <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="stulogpass" class="p1-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="stulogpass" id="stulogpass" required>

            </div>

            <button type="submit" class="btn btn-primary" name="login_user">Log in</button> </br>
    </form>
    </div>
    <div class="col-md-6 offset-md-1">
      <h5 class="mb-3">New User !! Sign Up </h5>
      <form method="POST" action="addStudent.php" name="myForm">
            <div class="form-group">
              <i class="fas fa-user"></i>
              <label for="stuname" class="p1-2 font-weight-bold">Name</label>
              <input type="text" class="form-control"  name="stuname" required>
            </div>

            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="p1-2 font-weight-bold">Email</label>
              <input type="email" class="form-control"  name="stuemail" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="stupass" class="p1-2 font-weight-bold">New Password</label>
              <input type="password" class="form-control"  name="stupass" required>

            </div>
        <input type="submit" class="btn btn-primary " name="register_student" value="submit">
        </form> </br>
       </div>
    </div>
 </div>
 <hr/>