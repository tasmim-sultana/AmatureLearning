<html>
<head>
<link rel="stylesheet" href="css\commonstyle.css" type="text/css">
</head>
<body>

<?php
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
 $errors=array();

if( isset($_POST['register_student']) )
{
    

   $stuname= mysqli_real_escape_string($conn,$_POST['stuname']);
    $stuemail= mysqli_real_escape_string($conn,$_POST['stuemail']);
    $stupass= mysqli_real_escape_string($conn,$_POST['stupass']);

    // Check db for existing user with the same user name

 $user_check_query="SELECT * FROM student WHERE stu_name='$stuname' or stu_email='$stuemail' LIMIT 1";
 $result1=mysqli_query($conn,$user_check_query);
 $user=mysqli_fetch_assoc($result1);
 if($user)
 {
     
     if($user['stu_email']=== $stuemail)
     {
         array_push($errors,"This email id already have a registered username");
     }
 }
 if(count($errors)==0)
 {

    $sql= "INSERT INTO student(stu_name,stu_email,stu_pass) VALUES ('$stuname','$stuemail','$stupass') ";
    $result2= mysqli_query($conn,$sql);
    if($result2)
    {
        header("location: index.php");
        
    }
    else{
        echo "Insertation failed! ". mysqli_error($conn);
    }
}
else{
    foreach ($errors as $error)
    {
        echo "$error <br>";
    }
    
}
}
?>
</body>
</html>
