<?php include_once 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าหลัก</title>
  <link rel="stylesheet" href="/sql/index.css">
  <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
   
</head>
<body >
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/logo.png"  style="margin-left:200px;"
      class="d-block w-25 " id="logo"alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/engi.jpeg" class="d-block w-100" alt="...">
    </div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

      
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
            
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/doctor/page/d1.php" >บันทึกข้อมูล</a>
               
              </li>
              <li class="nav-item">
              <?php
  $sql_get = mysqli_query($con,"SELECT * FROM message WHERE status=0");
  $count= mysqli_num_rows($sql_get);


  ?>
<div class="dropdown">
  <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  <ion-icon id="icon" name="notifications"></ion-icon><span class="badge bg-danger" id="count"><?php echo $count;?></span>
</a>
<div class="dropdown-menu">
  <?php
  $sql_get1 = mysqli_query($con,"SELECT * FROM message WHERE status=0");
  if(mysqli_num_rows($sql_get1)>0)
  { while($result = mysqli_fetch_assoc($sql_get1))
    {
      echo '<a class="dropdown-item text-primary " href="read_msg.php?id='.$result['id'].'">'.$result['msg'].'</a>';
      echo ' <div class="dropdown-divider"></div>';
    }



  }else{
    echo '<a class="dropdown-item text-danger font-weight-bold" href="#">Sorry! No Messages</a>';
  }
   
   ?>

</div> 
</li>


              <li class="nav-item  ">
                <a class="nav-link " style="margin-left: 900px;" href="/login/doctor.php"   onclick="return confirm('คุณต้องการออกจากระบบหรือไม่')" >ออกจากระบบ</a>
              </li>
             
            </ul>
          
        
          </div>
        </div>
      </nav>   
  
    <?php
require("Dd.php");
$sql = "SELECT * FROM Nurse ORDER BY HN ASC ";

$result=mysqli_query($connect,$sql);
?>    
 

      <?php if($count>0){}?>
    
       <form  style=" float:left;"  action="searchH.php" class="form-group mt-3 " method="POST"  >
         <label  style="margin-left: 300px;"   for="">ค้นหา HN</label>
        
         <input type="text" placeholder="Hospital Number" name="HNemployee" class="from-contrl">
         <input type="submit" value="search" class="btn btn-primary my-3">
</form>
      <form  action="searchf.php" class="form-group mt-3 " method="POST"  >
      <label  for="" >&nbsp;&nbsp; ค้นหาชื่อผู้ป่วย</label> 
         
         <input type="text" placeholder="first name"name="fname"  class="from-contrl">
         <input type="submit" value="search" class="btn btn-primary my-3">
         

        </form>
        </div> 
<div class ="container mt-5">
<h1 class="text-center" style=" font-family: Bai Jamjuree;" > ข้อมูลผู้ป่วย </h1>
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
        <a href= "d.php?HN=<?php echo $row["HN"];?>" id="a" class="btn btn-success">ข้อมูลผู้ป่วย</a>
      </td>
     
      <td> 
        <a href= "editd1.php?HN=<?php echo $row["HN"];?>" id="a"class="btn btn-primary">แก้ไข</a>
      </td>
      <td> <a href="follow.php?HN=<?php echo $row["HN"];?>" class="btn btn-info"id="b" >ติดตามทารก</td>
      <td> <a href="appoint.php?HN=<?php echo $row["HN"];?>" class="btn btn-warning"id="b" >นัดหมาย</td>
      <td>
        <a href="delete.php?idp=<?php echo $row["HN"];?>"id="a" class="btn btn-danger" 
        onclick="return confirm('คุณต้องการลบข้อมูลทั้งหมดหรือไม่')"
        >ลบข้อมูล</a>

      </td>
    </tr>
  <?php } ?>
  </tbody>
 </table>




 
</div>
</div>
<script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
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