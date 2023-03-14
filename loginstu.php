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
 

 //log in user

 if(!isset($_SESSION['is_login']))
 {
 if(isset($_POST["login_user"]))
 {
     $email=mysqli_real_escape_string($conn,$_POST['stulogemail']);
     $pass=mysqli_real_escape_string($conn,$_POST['stulogpass']);

     
    
     

         $query ="SELECT * FROM student WHERE stu_email='$email' AND stu_pass='$pass'";

         $result=mysqli_query($conn,$query);

         if(mysqli_num_rows($result)>0)
         {
             $_SESSION['is_login']= true;
             $_SESSION['stuLogEmail']=$email;
             header("location: index.php");
         }
         else{
             
             echo "Username or password is incorrect";
         }
     }
    }
 ?>
 </body>
 <html>













