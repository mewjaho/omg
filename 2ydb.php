<?php
require('Dm.php');
$HN=$_POST['HN'];
$flexRadioDefault1=$_POST['flexRadioDefault1'];
$why1=$_POST['why1'];
$flexRadioDefault2=$_POST['flexRadioDefault2'];
$why2=$_POST['why2'];
$flexRadioDefault3=$_POST['flexRadioDefault3'];
$why3=$_POST['why3'];
$flexRadioDefault4=$_POST['flexRadioDefault4'];
$why4=$_POST['why4'];
$flexRadioDefault5=$_POST['flexRadioDefault5'];
$why5=$_POST['why5'];
$query="SELECT HN FROM g WHERE HN='$HN'";
$result= mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
  echo"<script>alert('เดือนนี้เคยบันทึกข้อมูลแล้ว');</script>
  <meta http-equiv='refresh' content='1;URL=2y.php?HN=$HN'>";

}else {
  $sql = "INSERT INTO g (HN,flexRadioDefault1,why1,flexRadioDefault2,why2,flexRadioDefault3,why3,flexRadioDefault4,why4,flexRadioDefault5,why5) VALUES ('$HN','$flexRadioDefault1','$why1','$flexRadioDefault2','$why2','$flexRadioDefault3','$why3','$flexRadioDefault4','$why4','$flexRadioDefault5','$why5')";
  $result=mysqli_query($connect,$sql);
  if($result){
    echo"<script>alert('บันทึกข้อมูลสำเร็จ');</script>
    <meta http-equiv='refresh' content='1;URL=2y.php?HN=$HN'>";
    exit;
    }else { 
      echo "เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง";
    
     }
   
  
}

?>