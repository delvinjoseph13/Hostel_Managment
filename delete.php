<?php
@include 'connect.php';

if(isset($_GET['deleteusn']))
{
    $usn=$_GET['deleteusn'];
   $sql="DELETE FROM student WHERE usn='$usn'";
   $result=mysqli_query($con,$sql);
   if($result){
    header('location:display.php');
   }
    else{
        die(mysqli_error($con));
    }
    $sql1="DELETE FROM room WHERE usn='$usn'";
    $result1=mysqli_query($con,$sql1);
    if($result1){
     header('location:display.php');
    }
     else{
         die(mysqli_error($con));
     }
     $sql2="DELETE FROM payment WHERE usn='$usn'";
     $result2=mysqli_query($con,$sql2);
     if($result2){
      header('location:display.php');
     }
      else{
          die(mysqli_error($con));
      }
      $sql3="DELETE FROM course_details WHERE usn='$usn'";
      $result3=mysqli_query($con,$sql3);
      if($result){
       header('location:display.php');
      }
       else{
           die(mysqli_error($con));
       }
   }


?>