<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="index.css">
<body>


 <a href="logout.php" class="w3-button w3-green">Log Out</a>


<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()"> Close &times;</button>
  <a href="http://localhost/student/display.php#" class="w3-bar-item w3-button">STUDENT_DETAILS</a>
  <a href="http://localhost/student/room.php#" class="w3-bar-item w3-button">ROOM</a>
  <a href="http://localhost/student/payment.php#" class="w3-bar-item w3-button" >PAYMENT</a>
  <a href="http://localhost/student/course_details.php#" class="w3-bar-item w3-button">COURSE_DETAILS</a>
</div>

<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>

  <div class="w3-container">
    
  </div>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>


<?php
@include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add student</a>
      
    
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">USN</th>
      <th scope="col">NAME</th>
      <th scope="col">PHONE_NO</th>
      <th scope="col">FATHER_NAME</th>
      <th scope="col">FPHONE_NO</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>
  
  <?PHP
$sql="SELECT * FROM student";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
   $usn=$row['usn'];
    $Name=$row['name'];
    $Phone_no=$row['phone_no'];
    $Father_name=$row['father_name'];
    $Fphone_no=$row['fphone_no'];
    $Address=$row['address'];
    echo '<tr>
    <th scope="row">'.$usn.'</th>
    <td>'.$Name.'</td>
    <td>'.$Phone_no.'</td>
    <td>'.$Father_name.'</td>
    <td>'.$Fphone_no.'</td>
    <td>'.$Address.'</td>
  
  <td>
  <button name = "submit" class="btn btn-primary"><a href="update.php?updateusn='.$usn.'"  class="text-light">UPDATE</a></button>
  <button class="btn btn-danger"><a href="delete.php?deleteusn='.$usn.'" class="text-light">DELETE</a></button>
</td>
</tr>';

    }
}

?>

    
  </tbody>
</table>
</div>
    
</body>
