
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
 ?>
 