<?php
require('Dd.php');
$HN=$_POST['HN'];
$D=$_POST['D'];
$LOS=$_POST['LOS'];
$Chronological_age=$_POST['Chronological_age'];
$PCA=$_POST['PCA'];
$Adjusted=$_POST['Adjusted'];
$weigh=$_POST['weigh'];
$OFC2=$_POST['OFC2'];
$long2=$_POST['long2'];
$milk=implode(",",$_POST['milk']);
$why=$_POST['why'];
$why2=$_POST['why2'];

$query="SELECT HN FROM Nurse4 WHERE HN='$HN'";
$result= mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
  echo"<script type='text/javascript'>";
   echo "alert ('HN นี้เคยบันทึกข้อมูลแล้ว');";
   echo"window.location = '/doctor/page/d2.php';";
  echo "</script>"; 
}else {
  $sql = "INSERT INTO Nurse4(HN,D,LOS,Chronological_age,PCA,Adjusted,weigh,OFC2,long2,milk,why,why2) VALUES($HN,'$D','$LOS','$Chronological_age','$PCA','$Adjusted','$weigh','$OFC2','$long2','$milk','$why','$why2')";
  $result=mysqli_query($connect,$sql);
  if($result){
  echo"<script type='text/javascript'>";
   echo "alert ('บันทึกข้อมูลสำเร็จ');";
   echo"window.location = '/doctor/page/Home.php';";
  echo "</script>"; 
  }else { 
    echo "เกิดข้อผิดพลาด";
  }

}
?>




