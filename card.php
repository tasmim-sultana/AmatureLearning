
  
  
  
  <!-- Start most popular courses-->
  <div class="container mt-5">
    <h1 class="text-center"> Popular Courses </h1>
    <!--Start Most Popular Course 1st Card Deck-->

    <div class="card-deck mt-4">


    <?php
    $sql= "SELECT * FROM course LIMIT 3";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        $course_id= $row['course_id'];
        echo '<a href="coursedetails.php?course_id='.$course_id.'" class="btn " style="text-align: left; padding:0px; margin: 0px;">
        <div class="card">
          <img src="'.$row['course_img'].'" class="card-img-top  custom-pic " alt="Guiter" />
          <div class="card-body">
            <h5 class="card-title">'.$row['course_name'].'</h5>
            <p class="card-text">'.$row['course_desc'].'
            </p>
            <div class="card-footer">
              <p class="card-text d-inline">Price:
                <span class="font-weight-bolder">'.$row['course_price'].'</span>
              </p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
            </div>
          </div>
        </div>
      </a>';
      }
    }

    ?>

      
    </div>
    <!--End Most popular course 1st Deck-->
    <!--Start Most popular course 2nd Deck-->
    <div class="card-deck mt-4">

    <?php
    $sql= "SELECT * FROM course LIMIT 3,3";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        $course_id= $row['course_id'];
        echo '<a href="coursedetails.php?course_id='.$course_id.'" class="btn " style="text-align: left; padding:0px; margin: 0px;">
        <div class="card">
          <img src="'.$row['course_img'].'" class="card-img-top  custom-pic " alt="Guiter" />
          <div class="card-body">
            <h5 class="card-title">'.$row['course_name'].'</h5>
            <p class="card-text">'.$row['course_desc'].'
            </p>
            <div class="card-footer">
              <p class="card-text d-inline">Price:
                <span class="font-weight-bolder">'.$row['course_price'].'</span>
              </p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
            </div>
          </div>
        </div>
      </a>';
      }
    }

    ?>

      

      

    </div>
    <!--End of most popular Cources 2nd deck -->
    <div class="text-center m-2">
      <a class="btn btn-danger btn-sm" href="courses.php">View All Courses</a>
    </div>
  </div>
  <!-- End most popular courses-->