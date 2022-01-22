<?php
require('Dm.php');

$HN=$_POST['HN'];
$admit=$_POST['admit'];
$why=$_POST['why'];
$why=$_POST['why2'];
$sql = "INSERT INTO m2(HN,admit,why,why2) VALUES ('$HN','$admit','$why','$why2')";
$result=mysqli_query($connect,$sql);
  if($result){
 echo"<script>alert('บันทึกข้อมูลสำเร็จ');</script>
 <meta http-equiv='refresh' content='1;URL=การนอนโรงพยาบาล.php?HN=$HN'>";
 exit;
  }else { 
   echo "เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง";
 
  }


?>