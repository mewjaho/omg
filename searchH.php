<?php
require('Dd.php');

$HN = $_POST["HNemployee"]; 


 
$sql = "SELECT * FROM Nurse WHERE HN=$HN  ORDER BY HN ASC ";



$result=mysqli_query($connect,$sql);



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ข้อมูลผู้ป่วย</title>
  <link rel="stylesheet" href="/sql/index.css">
  <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet"> 
   
</head>
<body >
<nav class="navbar navbar-expand-lg " style="background-color: rgb(146,211,110)" >
        <div class="container-fluid">
        <img
            src="/img/b.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-text-top"
          />&nbsp;&nbsp;
          <a class="navbar-brand" href="#">Preterm</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/doctor/page/Home.php">หน้าหลัก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/doctor/page/d1.php">บันทึกข้อมูล</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link " style="margin-left: 950px;" href="/login/doctor.php"   onclick="return confirm('คุณต้องการออกจากระบบหรือไม่')" >ออกจากระบบ</a>
              </li>
             
            </ul>
          
        
          </div>
        </div>
      </nav>
      

      
      
 

     
    
      
  

<div class ="container mt-5">
<h1 class="text-center" > ข้อมูลผู้ป่วย </h1>
<table class="table table-hover mt-4">
    <thead>
      <tr style="background-color: rgb(146,211,110)">
        <th> Hospital Number </th>
        <th>ชื่อทารก</th>
        <th>นามสกุล</th>
        <th>ข้อมูลผู้ป่วย</th>
        
        <th>แก้ไขข้อมูล</th>
        <th>ติดตามทารก</th>
        <th>นัดหมาย</th>
        <th>ลบข้อมูล</th>

      </tr>
    </thead>
    <tbody>
    <?php while($row=mysqli_fetch_assoc($result)){?>
      <tr>
      <td><?php echo $row["HN"] ?></td>
      
      <td><?php echo $row["fname"]?></td>
      <td><?php echo $row["lname"]?></td>
      <td> 
        <a href= "d.php?HN=<?php echo $row["HN"];?>" id="b" class="btn btn-success">ข้อมูลผู้ป่วย</a>
      </td>
     
      <td> 
        <a href= "editd1.php?HN=<?php echo $row["HN"];?>" id="b"class="btn btn-primary">แก้ไข</a>
      </td>
      <td> <a href="follow.php?HN=<?php echo $row["HN"];?>" class="btn btn-info"id="b" >ติดตามทารก</td>
      <td> <a href="appoint.php?HN=<?php echo $row["HN"];?>" class="btn btn-warning"id="b" >นัดหมาย</td>
      <td>
        <a href="delete.php?idp=<?php echo $row["HN"];?>"id="b" class="btn btn-danger" 
        onclick="return confirm('คุณต้องการลบข้อมูลทั้งหมดหรือไม่')"
        >ลบข้อมูล</a>

      </td>
    </tr>
  <?php } ?>
  </tbody>
 </table>






  


</div>
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>

  
  
  
</body>
</html>