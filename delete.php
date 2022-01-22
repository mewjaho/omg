<?php
require('Dm.php');
$da=$_GET['idp'];
$sql="DELETE  FROM m3 WHERE da='$da'";

$result=mysqli_query($connect,$sql);

if($result){
 echo"ลบข้อมูลสำเร็จ";
  exit(0);
}else{
echo "เกิดข้อผิดพลาด";
}
?>
