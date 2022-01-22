<?php
require('Dm.php');
$HN=$_POST['HN'];
$appointment=$_POST['appointment'];
$why=$_POST['why'];
$why2=$_POST['why2'];
$query="SELECT HN FROM m1 WHERE HN='$HN'";
$result= mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
  echo"<script>alert('HN นี้เคยบันทึกข้อมูลแล้ว');</script>
  <meta http-equiv='refresh' content='1;URL=ตรวจตามนัด.php?HN=$HN'>";

}else {
  $sql = "INSERT INTO m1(HN,appointment,why,why2) VALUES ('$HN','$appointment','$why','$why2')";
  
  $result=mysqli_query($connect,$sql);
  if($result){
    echo"<script>alert('บันทึกข้อมูลสำเร็จ');</script>
    <meta http-equiv='refresh' content='1;URL=ตรวจตามนัด.php?HN=$HN'>";
    exit;
    }else { 
      echo "เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง";
    
     }
   
  
}

?>