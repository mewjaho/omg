

<?php
require('Dd.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
  <link href="d.css" rel="stylesheet">
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
      <a class="navbar-brand" href="#">Preterm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
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
            <a class="nav-link" style="margin-left: 950px;" href="/login/doctor.php"   onclick="return confirm('คุณต้องการออกจากระบบหรือไม่')" >ออกจากระบบ</a>
          </li>
          
        </ul>
        
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-sm-3 ">
        <div class="list-group">
          <a href="/doctor/page/d1.php" class="list-group-item list-group-item-action" >
            ข้อมูลทั่วไป
          </a>
          <a href="/doctor/page/d2.php" class="list-group-item list-group-item-action">ภาวะแทรกซ้อน</a>
          <a href="#" class="list-group-item list-group-item-action" style="background-color: 	
          rgb(242,201,251); color: black; ">สถานะการจำหน่าย</a>
          <a href="/doctor/page/d4.php" class="list-group-item list-group-item-action">ข้อมูลทารกในวันที่จำหน่าย</a>
          
        </div>




      </div>
      <div class="col">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
               <div class="card-body">
                <h4 class="card-header  text-white container col-4 " 
                style="background-color: rgb(158,118,180)" 
                >สถานะการจำหน่าย</h4>
                
                <div class="card-body mt-3"
                style="background-color: rgba(242, 226, 245, 0.904)">
                  <form action="3.php" method="POST">
                  <div class="form-check"> 
                  <label for="">Hospital Number</label>
                  <input type="text" name="HN" value=""required >
</div><br>
                
                    <div class="form-check"> 
                    <input class="form-check-input" type="checkbox" name= "status[]" value="Survive" id="Survive">
                    <label class="form-check-label" for="flexCheckDefault">
                      Survive
                    </label>
                    <div class="form-check"> 
                        <input class="form-check-input" type="checkbox" name= "status[]"value="กลับบ้าน" id="กลับบ้าน">
                        <label class="form-check-label" for="flexCheckDefault">
                          กลับบ้าน</label>
                        </div>
                        <div class="form-check"> 
                            <input class="form-check-input" type="checkbox"name= "status[]" value="ส่งต่อไปโรงพยาบาลอื่น" id="ส่งต่อไปโรงพยาบาลอื่น">
                            <label class="form-check-label" for="flexCheckDefault">
                              ส่งต่อไปโรงพยาบาลอื่น</label>
                            </div>
                        <div class="form-check"> 
                                <input class="form-check-input" type="checkbox" name= "status[]"value=" ย้ายไปหอผู้ป่วยเด็ก" id="ย้ายไปหอผู้ป่วยเด็ก">
                                <label class="form-check-label" for="flexCheckDefault">
                                  ย้ายไปหอผู้ป่วยเด็ก</label>
                                  <div class="input-group flex-nowrap" >
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="โปรดระบุ"
                                      aria-label="โปรดระบุ"
                                      aria-describedby="addon-wrapping"
                                      name="sta"
                                   
                              
                                    />
                                  </div>
                                  <div class="form-check"> 
                                    <input class="form-check-input" type="checkbox" name= "status[]"value=" still in ward at 1 year old" id="still">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      still in ward at 1 year old</label>
                            </div>
                        </div>
                     
                    </div>
                    <div class="form-check"> 
                      <input class="form-check-input" type="checkbox"name= "status[]" value="Dead" id="Dead">
                      <label class="form-check-label" for="flexCheckDefault">
                        Dead</label>
                  </div><br>
                  <button class="btn btn-success col-2 " type="submit" 
                  style="background-color: rgba(204, 17, 17, 0.904); font-family: Mali, cursive">บันทึกข้อมูล</button>
                
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