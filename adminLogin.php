<html>
<head>
<link rel="stylesheet" href="css\commonstyle.css" type="text/css">
</head>
<body>

<?php
if(!isset($_SESSION))
{
    session_start();
}
$server="127.0.0.1:3308";
$username="root";
$pass="root";
$dbname="elearning";

// Create Connection
 $conn = mysqli_connect($server,$username,$pass,$dbname);
 if($conn)
 {
     echo "";
 }
 else{
     echo "Not connected";
 }
 

 //log in admin
 if(isset($_POST["login_admin"]))
 { 
     $email=mysqli_real_escape_string($conn,$_POST['adminlogemail']);
     $pass=mysqli_real_escape_string($conn,$_POST['adminlogpass']);

     
    
     

         $query ="SELECT * FROM Eadmin WHERE admin_email='$email' AND admin_pass='$pass'";

         $result=mysqli_query($conn,$query);

         if(mysqli_num_rows($result)>0)
         {
             $_SESSION['is_admin_login']= true;
             $_SESSION['adminLogEmail']=$email;
             header("location: admindashboard.php");
         }
         else{
             
             echo "Username or password is incorrect";
         }
     }
 ?>
 </body>
 </html>













