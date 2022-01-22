<?php
require('Dd.php');

$HN=$_POST['HN'];
$BFD=implode(",",$_POST['BFD']);
$PDA=implode(",",$_POST['PDA']);
$NEC=implode(",",$_POST['NEC']);
$ROP=implode(",",$_POST['ROP']);
$whyROP=$_POST['whyROP'];
$whyROP2=$_POST['whyROP2'];
$IVH=implode(",",$_POST['IVH']);
$PVL=implode(",",$_POST['PVL']);
$Hearing=implode(",",$_POST['Hearing']);
$Infection=implode(",",$_POST['Infection']);
$whyROP3=$_POST['whyROP3'];

$query="SELECT HN FROM Nurse2 WHERE HN='$HN'";
$result= mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
  echo"<script type='text/javascript'>";
   echo "alert ('HN นี้เคยบันทึกข้อมูลแล้ว');";
   echo"window.location = '/doctor/page/d2.php';";
  echo "</script>"; 
}else {
  $sql = "INSERT INTO Nurse2(HN,BFD,PDA,NEC,ROP,whyROP,whyROP2,IVH,PVL,Hearing,Infection,whyROP3) VALUES('$HN','$BFD','$PDA','$NEC','$ROP','$whyROP','$whyROP2','$IVH','$PVL','$Hearing','$Infection','$whyROP3')" ;
  $result=mysqli_query($connect,$sql);
  if($result){
    echo"<script type='text/javascript'>";
     echo "alert ('บันทึกข้อมูลสำเร็จ');";
     echo"window.location = '/doctor/page/d3.php';";
    echo "</script>"; 
  }else { 
  echo "เกิดข้อผิดพลาด";
 
  }

}


?>