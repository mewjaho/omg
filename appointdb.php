<?php
require('Dd.php');
$HN=$_POST['HN'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Nut=$_POST['Nut'];
$t=$_POST['t'];
$room=$_POST['room'];

$sql= "INSERT INTO  appoint (HN,fname,lname,Nut,t,room) VALUES ('$HN','$fname','$lname','$Nut','$t','$room')";
$result=mysqli_query($connect,$sql);
if($result){
  echo"<script>alert('นัดหมายสำเร็จ');</script>
  <meta http-equiv='refresh' content='1;URL=appoint.php?HN=$HN'>";
  exit;
  }else { 
    echo "เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง";
  
   }
 

?>