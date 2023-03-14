<!--Start Footer-->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2019 || Designed By AmateurLearning || <a href="#login"
        data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a> </small>
  </footer>
  <!-- End of footer-->
  <script>
  function validateForm() {
  var x = document.forms["myForm"]["stuname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
  </script>

  <!-- Start Styudent Registration Modal-->


  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuRegModalCenter
      Label">Student Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- Start of student Registration Form-->
          <form method="POST" action="addStudent.php" name="myForm" onsubmit="return validateForm()">
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

        
          <!-- End of student Registration Form-->
        </div>
        <div class="modal-footer">
        <span id="successMsg"> </span>
        <input type="submit" class="btn btn-primary " name="register_student" value="submit">
        </div>
        
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- End student registration Modal-->



  <!-- Start Styudent Log in Modal-->


  <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Log in </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- Start of student LOg in  Form-->
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
          <!-- End of student Log in  Form-->
        </div>
        <div class="modal-footer">

        <button type="submit" class="btn btn-primary" name="login_user">Log in</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <!-- End student Log in  Modal-->

  <!-- Start Admin Log in Modal-->


  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Log in </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- Start of Admin LOg in  Form-->
          <form id="adminLoginForm" method="POST" action="adminLogin.php">

            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="adminlogemail" class="p1-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="adminlogemail" id="adminlogemail" required>

            </div>

            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="adminlogpass" class="p1-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="adminlogpass" id="adminlogpass" required>

            </div>

    
          <!-- End of Admin Log in  Form-->
        </div>
        <div class="modal-footer">

        <button type="submit" class="btn btn-primary" name="login_admin">Log in</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <!-- End Admin Log in  Modal-->


  <!-- file from jqury-->
  <script src="js\jquery-3.5.1.min.js"></script>
  <!--file from bootstrap-->
  <script src="js\popper.min.js"></script>
  <script src="js\bootstrap.min.js"> </script>
  <!--file from fontawesom-->
  <script src="js\all.min.js"></script>
</body>

</html>