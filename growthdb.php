<?php
require('Dm.php');
$HN=$_POST['HN'];
$date=$_POST['date'];
$da=$_POST['da'];
$weight=$_POST['weight'];
$height=$_POST['height']; 
$head=$_POST['head'];

$query="SELECT da FROM m3 WHERE HN='$HN' and da='$da'";
$result= mysqli_query($connect,$query);
 if(mysqli_num_rows($result) > 0){
  echo"<script>alert('เดือนนี้เคยบันทึกข้อมูลแล้ว');</script>
  <meta http-equiv='refresh' content='1;URL=growth.php?HN=$HN'>";
 }else {
   $sql = "INSERT INTO m3 (HN,date,da,weight,height,head) VALUES ('$HN','$date','$da','$weight','$height','$head')";
   $result=mysqli_query($connect,$sql);
  if($result){
    echo"<script>alert('บันทึกข้อมูลสำเร็จ');</script>
    <meta http-equiv='refresh' content='1;URL=growth.php?HN=$HN'>";
    exit;
    }else { 
      echo "เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง";
    
     }
   
  
}
  
?>
