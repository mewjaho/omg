<?php
require('Dd.php');


$BFD=implode(",",$_POST['BFD']);
$PDA=implode(",",$_POST['PDA']);
$NEC=implode(",",$_POST['NEC']);
$ROP=implode(",",$_POST['ROP']);
$IVH=implode(",",$_POST['IVH']);
$PVL=implode(",",$_POST['PVL']);
$Hearing=implode(",",$_POST['Hearing']);
$Infection=implode(",",$_POST['Infection']);

$sql="UPDATE  Nurse2 SET BFD='$BFD',PDA='$PDA', NEC='$NEC',ROP='$ROP',IVH='$IVH',PVL='$PVL',Hearing='$Hearing',Infection='$Infection' ";

$result=mysqli_query($connect,$sql);
if($result){
  header("location:Home.php");
  exit(0);
}else{
echo "เกิดข้อผิดพลาด";

}
?>