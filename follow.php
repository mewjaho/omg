
<?php
require('Dd.php');
 $HN=$_GET['HN'];

 $sql="SELECT *FROM Nurse WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);
 $row=mysqli_fetch_assoc($result);
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>บันทึกข้อมูล</title>
  <link href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
  <link href="follow.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg " style="background-color:rgb(146,211,110) ;">
    <div class="container-fluid">
    <img
            src="/img/b.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-text-top"
          />&nbsp;&nbsp;
      <a class="navbar-brand" style="font-weight: bold;" href="#">Preterm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="Home.php">หน้าหลัก</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" style="font-weight: bold;" href="/doctor/page/d1.php" >บันทึกข้อมูล</a>
               
              </li>
          
          <li class="nav-item " >
            <a class="nav-link"style="margin-left: 950px;" href="/login/doctor.php"   onclick="return confirm('คุณต้องการออกจากระบบหรือไม่')" >ออกจากระบบ</a>
          </li>
          
        </ul>
        
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-sm-3 ">
        <div class="list-group" id="side">
          <a href="#" class="list-group-item list-group-item-action" style="background-color: 	
          rgb(242,201,251); color: black;" >
            ข้อมูลทั่วไป
          </a>
          <a href="follow2.php?HN=<?php echo $row["HN"];?>" class="list-group-item list-group-item-action" >ปัญหาที่เกิดขึ้นกับทารก</a>
          <a href="follow3.php?HN=<?php echo $row["HN"];?>" class="list-group-item list-group-item-action">การเจริญเติบโต</a>
          <a href="follow4.php?HN=<?php echo $row["HN"];?>" class="list-group-item list-group-item-action">พัฒนาการของทารก</a>
          
        </div>




      </div>
      <?php
require('Dm.php');
 $HN=$_GET['HN'];

 $sql="SELECT *FROM m2 WHERE $HN=HN ORDER BY  id desc";

 $result=mysqli_query($connect,$sql);
 $row=mysqli_fetch_assoc($result);
 

?>
      <div class="col">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
               <div class="card-body ">
                <h4 class="card-header  text-white container col-6" 
                style="background-color: rgb(158,118,180)" 
                >การนอนซ้ำโรงพยาบาลหลังจากจำหน่าย</h4>
                <div class="card-body col-12 mt-3 "
                              style="background-color: ">
                             
                  <div class="row">
            <?php foreach ($result as $row) {?>    
                <div>
                  <label>HN : </label>
                  <input type="text" readonly style="border:none; background-color:white; " value="<?php echo $row['HN'];?>" name="HN">

            <div class="radio">
              <span>
                <?php
                echo $row['admit'];
                ?>
                </span>
            </div>    
                  <div class="input-group flex-nowrap">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="กรุณาระบุ"
                      aria-label="กรุณาระบุ"
                      readonly
                      aria-describedby="addon-wrapping"
                      value="<?php echo $row["why"];?> <?php echo $row["why2"];?>"
                    />
                 
                  </div>
                  <hr>
                 
              
              
                              
                    </div>
                    <?php } ?>  
                </div>
             
            </div>
        </div>

    </div>
  </div>
           
           


      
           
<?php
require('Dm.php');
 $HN=$_GET['HN'];

 $sql="SELECT *FROM m1 WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);
 $row=mysqli_fetch_assoc($result);
 

?>
    <div class="col">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
               <div class="card-body ">
                <h4 class="card-header  text-white container col-5" 
                style="background-color: rgb(158,118,180)" 
                >การมาตรวจตามนัดครั้งแรก</h4>
                <div class="card-body col-12 mt-3 "
                              style="background-color: ">
                        <?php foreach ($result as $row) {?>   
                              <label>HN : </label>
                  <input type="text" readonly style="border:none; background-color:white; " value="<?php echo $row['HN'];?>" name="HN"><br>

              <span>
                 <?php
                echo $row['appointment'];
                ?>
                </span>
              
              <div class="input-group flex-nowrap"> 
                <input
                  type="text"
                  class="form-control"
                  placeholder="กรุณาระบุ"
                  aria-label="กรุณาระบุ"
                  aria-describedby="addon-wrapping"
                  readonly
                  value="<?php echo $row["why"];?> <?php echo $row["why2"];?>"
                />
              </div>
              <?php } ?>  
            </div>
                              
                    </div>
                </div>
            </div>
        </div>

    </div>


  
        
        
    
    
  
</body>
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
</html>