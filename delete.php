<?php
require('Dd.php');
$HN= $_GET['idp'];

$sql="DELETE Nurse, Nurse2, Nurse3,Nurse4 FROM Nurse
    INNER JOIN Nurse2   ON Nurse.HN = Nurse2.HN
    INNER JOIN Nurse3   ON Nurse.HN = Nurse3.HN
    INNER JOIN Nurse4 ON Nurse.HN = Nurse4.HN
    
WHERE Nurse.HN = $HN";
    

$result=mysqli_query($connect,$sql);


if($result){
 header('location:Home.php');
  exit(0);
}else{
echo "เกิดข้อผิดพลาด";
}
?>



 
