<?php
require('Dm.php');

$HN=$_POST['HN'];
$da=$_POST['da'];
$Problem=implode(",",$_POST['Problem']);
$why=$_POST['why'];
$sql = "INSERT INTO m4 (HN,da,Problem,why) VALUES ('$HN','$da','$Problem','$why')";
$result=mysqli_query($connect,$sql);
if($result){
  echo"<script>alert('บันทึกข้อมูลสำเร็จ');</script>
  <meta http-equiv='refresh' content='1;URL=problem.php?HN=$HN'>";
  exit;
  }else { 
    echo "เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง";
  
   }
 


?>