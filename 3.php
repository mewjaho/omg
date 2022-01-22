<?php

require('Dd.php');
$HN=$_POST['HN'];
$status=implode(",",$_POST['status']);
$sta=$_POST['sta'];

$query="SELECT HN FROM Nurse3 WHERE HN='$HN'";
$result= mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
  echo"<script type='text/javascript'>";
   echo "alert ('HN นี้เคยบันทึกข้อมูลแล้ว');";
   echo"window.location = '/doctor/page/d2.php';";
  echo "</script>"; 
}else {
  $sql = "INSERT INTO Nurse3(HN,status,sta) VALUES('$HN','$status','$sta')" ;
  $result=mysqli_query($connect,$sql);
  if($result){
  echo"<script type='text/javascript'>";
   echo "alert ('บันทึกข้อมูลสำเร็จ');";
   echo"window.location = '/doctor/page/d4.php';";
  echo "</script>"; 
  }else { 
  echo "เกิดข้อผิดพลาด";
  }
}


?>


