<?php

include("dbConnection.php");
if(isset($_REQUEST['coursePurchesBtn']))
{
    echo "Tasmim Sultana";
     echo $orderId=$_REQUEST['order_id'];
     echo $stuEmail=$_REQUEST['stuLogEmail'];
     echo $CoursePrice=$_REQUEST['course_price'];
     echo $courseSubPrice=$_REQUEST['course_purches_price'];
    if($CoursePrice==$courseSubPrice)
    {
        echo "1233424";
    }
    else
    {
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Enter Accurate Purches Amount !! </div>';
    }

}
?>