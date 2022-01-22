
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
          <a href="/doctor/page/d1.php" class="list-group-item list-group-item-action" >
            ข้อมูลทั่วไป
          </a>
          <a href="#" class="list-group-item list-group-item-action" style="background-color: 	
          rgb(242,201,251); color: black; ">ภาวะแทรกซ้อน</a>
          <a href="/doctor/page/d3.php" class="list-group-item list-group-item-action">สถานะการจำหน่าย</a>
          <a href="/doctor/page/d4.php" class="list-group-item list-group-item-action">ข้อมูลทารกในวันที่จำหน่าย</a>
          
        </div>




      </div>
      <div class="col">
        <div class="row">
   
            <div class="card "
            >
               <div class="card-body">
           
           
                <div class="coneainr">
                
                              <h4 class="card-header  text-white container col-4 " 
                              style="background-color: rgb(158,118,180)" 
                              >ภาวะแทรกซ้อน</h4>
                              <div class="card-body col-12 mt-3 "
                              style="background-color: rgba(242, 226, 245, 0.904)">
                 <form action="2.php" method="POST">
                              <div class="form-check"> 
                  <label for="">Hospital Number</label>
                  <input type="text" name="HN" value="" required>
</div><br>
                                  <ol>
                                  <li>BFD
                                      <div class="form-check" > 
                                          <input class="form-check-input" name="BFD[]" type="checkbox" value="no BFD" id="">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            no BFD </label>
                                      </div>
                                      <div class="form-check " > 
                                          <input class="form-check-input"  name="BFD[]" type="checkbox" value="Yes" id="">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            Yes </label>

                                            <div class="form-check"> 
                                            <input type="checkbox" name="BFD[]"  value="Mild" id=""> Mild &nbsp;
                                            <input type="checkbox" name="BFD[]"  value="Moderate" id=""> Moderate &nbsp;
                                            <input type="checkbox" name="BFD[]"  value="Severe" id=""> Severe
</div>
          
                                  </li><br>
                                  <li>PDA closure
                                  <div class="form-check"> 
                                          <input class="form-check-input" name="PDA[]" type="checkbox" value="No due to" id="">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            No due to&nbsp; </label></div>
                                            <div class="form-check">          
                                            <input class="form-check-input" name="PDA[]" type="checkbox" value="No PDA" id="">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            No PDA&nbsp; </label></div>
                                            <div class="form-check">          
                                            <input class="form-check-input" name="PDA[]" type="checkbox" value="No indication" id="">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            No indication&nbsp; </label></div>
                  
                                           
                                  <div class="form-check">   
                                                <input class="form-check-input" name=" PDA[]"type="checkbox" value="Yes" id="PDA4">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Yes </label>
                                                  <div class="form-check"> 
                                                  <input type="checkbox"name="PDA[]"  value="Indomethacin" id="" > Indomethacin&nbsp;
                                                  <input type="checkbox"name="PDA[]"  value="Ibuprofen" id="" > Ibuprofen
                                                  <input type="checkbox" name="PDA[]"  value="Acetaminophen" id=""> Acetaminophen <br>
                                                  <input type="checkbox"name="PDA[]"  value="PDA ligation" id="" > PDA ligation&nbsp;&nbsp;&nbsp;
                                                  <input type="checkbox"name="PDA[]"  value="bed side" id="" > bed side&nbsp;&nbsp;
                                                  <input type="checkbox" name="PDA[]"  value="OR" id=""> OR
                                                                                                                                          
                                                        </div></li><br>
                                            <li>NEC ≥ stage2
                                               <div class="form-check"> 
                                               <input class="form-check-input" name="NEC[]" type="checkbox" value="no NEC" id="NEC1">
                                               <label class="form-check-label" for="flexCheckDefault">
                                                  no NEC </label>
                                                </div>
                                                <div class="form-check"> 
                                                  <input class="form-check-input" name="NEC[]" type="checkbox" value="Yes" id="NEC2">
                                                  <label class="form-check-label" for="flexCheckDefault">
                                                     Yes 
</label>
<div class="form-check"> 
                                                     <input type="checkbox" name="NEC[]"  value=" Medical Treatment" id="" > Medical Treatment
                                                  <input type="checkbox" name="NEC[]"  value="Surgical Treatment" id="" > Surgical Treatment

                                                     
                                                </div></li><br>
                                            
                                            
                                               
                                            <li>ROP
                                                  <div class="form-check"> 
                                                  <input class="form-check-input" name="ROP[]" type="checkbox" value="no ROP" id="ROP1">
                                                  <label class="form-check-label" for="flexCheckDefault">
                                                    no ROP </label>
                                       </div>
                                       <div class="form-check"> 
                                         <input class="form-check-input" name="ROP[]" type="checkbox" value="Yes" id="ROP2">
                                         <label class="form-check-label" for="flexCheckDefault">
                                            Yes </label>
                                            <div class="form-check"> 
                                            <input type="checkbox"name="ROP[]"  value="bilateral" id="ROP2" >  bilateral
                                                  <input type="checkbox"name="ROP[]"  value="unilateral" id="ROP2"  >unilateral

                                             
                                        
                                             
                                         <div class="form-group"> 
                                           <label for="">Stage
                                           <input
                                            type="text"
                                            name="whyROP"
                                            class="form-control"
                                            placeholder="ระบุ stage สูงสุด"
                                            aria-label="โปรดระบุ"
                                            aria-describedby="addon-wrapping"
                                    
                                          />
                                        </div>
                                         Treatment
                                         <input type="checkbox"name="ROP[]"  value="Laser" id="ROP2" >  Laser
                                                  <input type="checkbox"name="ROP[]"  value="Surgery" id="ROP2" >Surgery
                                                  <input type="checkbox"name="ROP[]"  value="อื่นๆ" id="ROP2" > อื่นๆ
                                                  <input
                                            type="text"
                                            placeholder="ระบุ"
                                            name="whyROP2"><br>
                                                                              
                                   </div><br>
                                  </li> 
                              <li>IVH
                                    <div class="form-check"> 
                                    <input class="form-check-input" type="checkbox" name="IVH[]" value="no IVE" id="IVE1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                       no IVE </label></div>
                                       <div class="form-check"> 
                                    <input class="form-check-input" type="checkbox"name="IVH[]" value="IVE grade 1-2" id="IVE1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    IVE grade 1-2 </label></div>
                                    <div class="form-check"> 
                                    <input class="form-check-input" type="checkbox"name="IVH[]" value=" IVE grade 3" id="IVE1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    IVE grade 3 </label></div>
                                    <div class="form-check"> 
                                    <input class="form-check-input" type="checkbox"name="IVH[]" value=" IVE grade 4 " id="IVE1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    IVE grade 4 </label>
                                 
                                                                                                                                                                              
                               </li><br>
                               <li>PVL
                                <div class="form-check"> 
                                <input class="form-check-input" name="PVL[]"type="checkbox" value="no PVL" id="PVL1">
                                <label class="form-check-label" for="flexCheckDefault">
                                   no PVL </label></div>
                                   <div class="form-check"> 
                                <input class="form-check-input"name="PVL[]" type="checkbox" value="Yes" id="PVL1">
                                <label class="form-check-label" for="flexCheckDefault">
                                 Yes </label></div>
                                   <div class="form-check"> 
                                <input class="form-check-input" name="PVL[]"type="checkbox" value="Unknown" id="PVL1">
                                <label class="form-check-label" for="flexCheckDefault">
                                   Unknown </label>
                                   </li><br>                                                                                                                                       
                                  
                                    <li>Hearing Inpairment
                                      <div class="form-check"> 
                                      <input class="form-check-input"name="Hearing[]" type="checkbox" value="No" id="Hearing1">
                                      <label class="form-check-label" for="flexCheckDefault">
                                         No  </label>
                                       </div>
                                       <div class="form-check"> 
                                        <input class="form-check-input" name="Hearing[]"type="checkbox" value="Yes" id="Hearing2">
                                        <label class="form-check-label" for="flexCheckDefault">
                                           Yes</label>
                                           <div> 
                                           <label>OAE: refer</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                           <input type="checkbox"name="Hearing[]"value="unilateral" > unilateral
                                       <input type="checkbox" name="Hearing[]"value="bilateral  " > bilateral                                                                                                                                                                                                             
                                       </div> 

                                       <label>ABR: abnormal</label>&nbsp;
                                      <input type="checkbox" name="Hearing[]"value="unilateral  "> unilateral
                                       <input type="checkbox"name="Hearing[]"value="bilateral  " > bilateral                                                                                                                                                                                                             
                                       </div>  <br>

                                    </li>
                                    <li>Infection
                                    <div class="form-check"> 
                                          <input class="form-check-input" name="Infection[]" type="checkbox" value="no infection" id="BMD1">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            no infection&nbsp; </label></div>
                                            <div class="form-check">          
                                            <input class="form-check-input" name="Infection[]" type="checkbox" value="VAP" id="BMD1">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            VAP&nbsp; </label></div>
                                            <div class="form-check">          
                                            <input class="form-check-input" name="Infection[]" type="checkbox" value="CLABSI" id="BMD1">
                                          <label class="form-check-label" for="flexCheckDefault">
                                           CLABSI&nbsp; </label></div>
                                           <div class="form-check"> 
                                      <input class="form-check-input"  name="Infection[]" type="checkbox" value="อื่นๆ" id="Hearing1">
                                      <label class="form-check-label" for="flexCheckDefault">
                                       อื่นๆ  </label>                                         
                                           <input 
                                            type="text"
                                            placeholder="ระบุ"
                                            name="whyROP3"><br>
                                                                      



                                       </div>
                                    </li>

                        
                        </ol>
                        <button class="btn btn-success col-2 " type="submit" 
                          style="background-color: rgba(204, 17, 17, 0.904);   font-family: Mali, cursive; ">บันทึกข้อมูล</button>
                  </form>  
                    
                    
                    
                    
                    
                  
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