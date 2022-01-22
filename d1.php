<?php
require('Dd.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>บันทึกข้อมูล</title>
  <link href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
  <link href="d.css" rel="stylesheet">
  
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
      <a class="navbar-brand" href="#">Preterm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Home.php">หน้าหลัก</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="/doctor/page/d1.php" >บันทึกข้อมูล</a>
               
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
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action" style="background-color: 	
          rgb(242,201,251); color: black;" >
            ข้อมูลทั่วไป
          </a>
          <a href="/doctor/page/d2.php" class="list-group-item list-group-item-action" >ภาวะแทรกซ้อน</a>
          <a href="/doctor/page/d3.php" class="list-group-item list-group-item-action">สถานะการจำหน่าย</a>
          <a href="/doctor/page/d4.php" class="list-group-item list-group-item-action">ข้อมูลทารกในวันที่จำหน่าย</a>
          
        </div>




      </div>

      <div class="col">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
               <div class="card-body ">
                <h4 class="card-header  text-white container col-3" 
                style="background-color: rgb(158,118,180)" 
                >ข้อมูลทั่วไป</h4>
                <div class="card-body col-12 mt-3 "
                              style="background-color: rgba(242, 226, 245, 0.904)">
               
              
                <form action="one.php" method="POST">
                 
                      <div > 
                          <label for="">ชื่อ  </label>
                          <input type="text" name="mom" required> 
                          <label for="">สกุล  มารดา</label>
                          <input type="text" name="moml"  required> 
                     
                          <label for="">HN</label>
                          <input type="text" name="HN_mom" class="row-4 " required>
                          </div><br>
                          
                         
                        <div class="form-group"> 
                          <label for="" >ชื่อ </label>
                          <input type="text" name="fname" required>
                          <label for="" >สกุล ทารก</label>
                          <input type="text" name="lname" required>
                          <label for="">HN</label>
                          <input type="text" name="HN" required>
                        </div><br>
                         
                
                        <div class="form-group">
                          <label for="">วันที่เข้ารับการรักษาในโรงพยาบาล</label>
                          <input type="date" name="admit" required>
                          <label for="">วัน/เดือน/ปีเกิด</label>
                
                          <input type="date" name="birthday" required>
                          
                          <label for="">เวลา</label>
                          <input type="time" name="t" required><br>
                          </div><br>

                         
                          <div class="form-group"> 
                          <label for="">อายุครรภ์</label>
                          <input type="text" name="A" class="col-1" required>สัปดาห์
                          <label for="">อายุหลังเกิด</label>
                          <input type="text" name="C" class="col-1" required>วัน<br>
                          </div><br>
                          
                          <div class="form-group">
                          <label for="">(กรณี refer) Apgar 1 นาที</label>
                          <input type="text" name="B" class="col-2" required>
                         
                          <label for="">Apgar 5 นาที</label>
                          <input type="text" name="D"class="col-2" required>
</div><br>
                            

                          <div class="form-group">
                              <label for="">น้ำหนักแรกเกิด</label>
                              <input type="text" name="w"class="col-1" required>กรัม
                              <label for="">OFC</label>
                              <input type="text" name="OFC"class="col-1" required>cms
                              <label for="">ความยาว</label>
                              <input type="text" name="long1"class="col-1" required>cms
                            </div><br>   
                            <button class="btn btn-success col-2 " type="submit" 
                          style="background-color: rgba(204, 17, 17, 0.904);   font-family: Mali, cursive; ">บันทึกข้อมูล</button>
                  </form>  
                           
            
                    
                  
                    
                      
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