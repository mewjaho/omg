<?php
require('Dd.php');
$Nut=$_GET['idp'];
$sql="DELETE  FROM appoint WHERE Nut='$Nut'";

$result=mysqli_query($connect,$sql);

if($result){
 echo"สำเร็จ";
  exit(0);
}else{
echo "เกิดข้อผิดพลาด";
}
?>
