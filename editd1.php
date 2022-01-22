<?php
require('Dd.php');
 $HN=$_GET['HN'];
 $sql="SELECT * FROM Nurse  WHERE HN= $HN";


 
 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แก้ไขข้อมูล</title>
  <link href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
  <link href="edit.css" rel="stylesheet">
 
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

 



      </div>
      <div class="col">
        <div class="row">
          <div class="col-sm-12 ">
            <div class="card">
               <div class="card-body">
                <h4 class="card-header  text-white container col-2" 
                style="background-color: rgb(158,118,180)" 
                >ข้อมูลทั่วไป</h4>
                <div class="card-body "
                style="background-color: rgba(255, 254, 254, 0.904)">
              
                <form action="update.php " method="POST">
                  <input type="hidden" value="<?php echo $row['HN'];?>" name="HN">
                  <div>
                 
                      <div > 
                          <label for="">ชื่อ  </label>
                          <input type="text" name="mom"value="<?php echo $row["mom"];?>" > 
                          <label for="">สกุล  มารดา</label>
                          <input type="text" name="moml" value="<?php echo $row["moml"];?>" > 
                     
                          <label for="">HN</label>
                          <input type="text" name="HN_mom" class="row-4 " value="<?php echo $row["HN_mom"];?>" >
                          </div><br>
                          
                         
                        <div class="form-group"> 
                          <label for="" >ชื่อ </label>
                          <input type="text" name="fname" value="<?php echo $row["fname"];?>" >
                          <label for="" >สกุล ทารก</label>
                          <input type="text" name="lname" value="<?php echo $row["lname"];?>" >
                          <label for="">HN</label>
                          <input type="text" name="HN" value="<?php echo $row["HN"];?>" >
                        </div><br>
                         
                
                        <div class="form-group">
                          <label for="">วันที่เข้ารับการรักษาในโรงพยาบาล</label>
                          <input type="date" name="admit" value="<?php echo $row["admit"];?>" >
                          <label for="">วัน/เดือน/ปีเกิด</label>
                
                          <input type="date" name="birthday" value="<?php echo $row["birthday"];?>" >
                          
                          <label for="">เวลา</label>
                          <input type="time" name="t" value="<?php echo $row["t"];?>" ><br>
                          </div><br>

                         
                          <div class="form-group"> 
                          <label for="">อายุครรภ์</label>
                          <input type="text" name="A" class="col-1" value="<?php echo $row["A"];?>" >สัปดาห์
                          <label for="">อายุหลังเกิด</label>
                          <input type="text" name="C" class="col-1" value="<?php echo $row["C"];?>" >วัน<br>
                          </div><br>
                          
                          <div class="form-group">
                          <label for="">(กรณี refer) Apgar 1 นาที</label>
                          <input type="text" name="B" class="col-2" value="<?php echo $row["B"];?>" >
                          </div><br>
                          <label for="">Apgar 5 นาที</label>
                          <input type="text" name="D"class="col-2" value="<?php echo $row["D"];?>" ><br>
                             </div><br>
                          <div class="form-group">
                              <label for="">น้ำหนักแรกเกิด</label>
                              <input type="text" name="w"class="col-1" value="<?php echo $row["w"];?>" >กรัม
                              <label for="">OFC</label>
                              <input type="text" name="OFC"class="col-1"value="<?php echo $row["OFC"];?>" >cms
                              <label for="">ความยาว</label>
                              <input type="text" name="long1"class="col-1 "value="<?php echo $row["long1"];?>" >cms
                            </div><br>   
                            <button onclick="return confirm('คุณต้องการอัปเดตข้อมูลทั่วไปหรือไม่')"  class="btn btn-success col-2 " type="submit" 
                          style="background-color: rgba(204, 17, 17, 0.904);  font-weight:bold; font-family:Bai Jamjuree ; ">อัปเดตข้อมูล</button>
                  </form>  
       



                           
            
                    
                  
                    
                      
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
require('Dd.php');
$HN=$_GET['HN'];
$sql="SELECT * FROM Nurse2  WHERE HN= $HN";


 
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_assoc($result);
$BFD_arr=array("no BFD","Yes","Mild","Moderate","Severe");
$PDA_arr=array("No due to","No PDA","No indication","Yes","Indomethacin","Ibuprofen","Acetaminophen","PDA ligation","bed side","OR");
$NEC_arr=array("no NEC","Yes","Medical Treatment","Surgical Treatment");
$ROP_arr=array("no ROP","Yes","bilateral","unilateral","Laser","Surgery","อื่นๆ");
$IVH_arr=array("no IVE","IVE grade 1-2","IVE grade 3","IVE grade 4 ");
$PVL_arr=array("no PVL","Yes","Unknown");
$Hearing_arr=array("No","Yes","unilateral","bilateral","unilateral ","bilateral ");
$Infection_arr=array("no infection","VAP","CLABSI","อื่นๆ");

?>


    <div class="col">
        <div class="row">
          <div class="col-sm-12 ">
            <div class="card">
               <div class="card-body">
                <h4 class="card-header  text-white container col-2" 
                style="background-color: rgb(158,118,180)" 
                >ภาวะแทรกซ้อน</h4>
                <form action="update2.php " method="POST">
                <ol>
            <li>BFD<br>
            <?php  
            $BFD = explode(",",$row['BFD']);
            foreach($BFD_arr as $value){
              if(in_array($value,$BFD)){
                echo "<input class='form-check-input' name='BFD[]' type='checkbox' value='$value' checked > $value "; 
              }
              else {
                echo "<input class='form-check-input' name='BFD[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br>
             </li><br>
            <li>PDA closure<br>
            <?php 
            $PDA = explode(",",$row['PDA']);
            foreach($PDA_arr as $value){
              if(in_array($value,$PDA)){
                echo "<input class='form-check-input' name='PDA[]' type='checkbox' value='$value' checked > $value"; 
              }
              else {
                echo "<input class='form-check-input' name='PDA[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br>
             </li><br>
            <li>NEC ≥ stage2<br>
            <?php 
            $NEC = explode(",",$row['NEC']);
            foreach($NEC_arr as $value){
              if(in_array($value,$NEC)){
                echo "<input class='form-check-input' name='NEC[]' type='checkbox' value='$value' checked > $value"; 
              }
              else {
                echo "<input class='form-check-input' name='NEC[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br>
             </li><br>
            <li>ROP<br> 
            <?php 
            $ROP = explode(",",$row['ROP']);
            foreach($ROP_arr as $value){
              if(in_array($value,$ROP)){
                echo "<input class='form-check-input' name='ROP[]'  type='checkbox' value='$value' checked > $value"; 
              }
              else {
                echo "<input class='form-check-input' name='ROP[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br>
             </li><br>
            <li>IVH<br>
         
            <?php 
            $IVH = explode(",",$row['IVH']);
            foreach($IVH_arr as $value){
              if(in_array($value,$IVH)){
                echo "<input class='form-check-input' name='IVH[]' type='checkbox' value='$value' checked > $value"; 
              }
              else {
                echo "<input class='form-check-input' name='IVH[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br>
           </li><br>
            <li>PVL<br>
            <?php 
            $PVL= explode(",",$row['PVL']);
            foreach($PVL_arr as $value){
              if(in_array($value,$PVL)){
                echo "<input class='form-check-input' name='PVL[]' type='checkbox' value='$value' checked > $value"; 
              }
              else {
                echo "<input class='form-check-input' name='PVL[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br>
            </li><br>
            <li>Hearing Inpairment<br>
            <?php 
            $Hearing= explode(",",$row['Hearing']);
            foreach($Hearing_arr as $value){
              if(in_array($value,$Hearing)){
                echo "<input class='form-check-input' name='Hearing[]' type='checkbox' value='$value' checked > $value"; 
              }
              else {
                echo "<input class='form-check-input' name='Hearing[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br>
             </li><br>
               <li>Infection<br>
               <?php 
            $Infection= explode(",",$row['Infection']);
            foreach($Infection_arr as $value){
              if(in_array($value,$Infection)){
                echo "<input class='form-check-input' name='Infection[]' type='checkbox' value='$value' checked > $value"; 
              }
              else {
                echo "<input class='form-check-input' name='Infection[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br><br>
            </li>
          
            <button onclick="return confirm('คุณต้องการอัปเดตข้อมูลภาวะแทรกซ้อนหรือไม่')" class="btn btn-success col-2 " type="submit" 
                  style="background-color: rgba(204, 17, 17, 0.904); font-weight:bold; font-family: Bai Jamjuree ;">อัปเดตข้อมูล</button>
          </form>     
           
                </div>
                </div>
            </div>
        </div>
       
   
        
  
         

<?php
require('Dd.php');
 $HN=$_GET['HN'];
 $sql="SELECT * FROM Nurse3  WHERE HN= $HN";


 
 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);
 $status_arr=array("Survive","กลับบ้าน","ส่งต่อไปโรงพยาบาลอื่น"," ย้ายไปหอผู้ป่วยเด็ก","still in ward at 1 year old","Dead");



?>





    <div class="col">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card mt-3">
               <div class="card-body">
                <h4 class="card-header  text-white container col-4 " 
                style="background-color: rgb(158,118,180)" 
                >สถานะการจำหน่าย</h4><br>
                <form action="update3.php " method="POST">

                <?php 
            $status = explode(",",$row['status']);
            foreach($status_arr as $value){
              if(in_array($value,$status)){
                echo "<input class='form-check-input' name='status[]' type='checkbox' value='$value' checked > $value"; 
              }
              else {
                echo "<input class='form-check-input' name='status[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br><br>
            
         

                
                    
                                  
                  <button onclick="return confirm('คุณต้องการอัปเดตข้อมูลสถานะการจำหน่ายหรือไม่')"  class="btn btn-success col-2 " type="submit" 
                  style="background-color: rgba(204, 17, 17, 0.904); margin-left:25px; font-weight:bold; font-family: Bai Jamjuree ;">อัปเดตข้อมูล</button>
                   
          </form>
              </div>
               </div>
                  
          
              
              
          </div>
      </div>
  </div>




                   
                
                                  
                         
 
  <?php
require('Dd.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM Nurse4 WHERE $HN=HN";


 $result=mysqli_query($connect,$sql);


 $row=mysqli_fetch_assoc($result);
 $milk_arr=array("Exclusive breast milk or fortified breast milk","Breast milk predominant","Formula predominant","Exclusive formula milk");

 ?>
 <div class="col">
        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="card mt-3">
               <div class="card-body ">
                <h4 class="card-header  text-white container col-5 " 
                style="background-color: rgb(158,118,180)" 
                >ข้อมูลทารกวันที่จำหน่ายจากโรงพยาบาล</h4>
                <div class="card-body  mt-3"
                style="">
              <form action="update4.php " method="POST">            
                      <div class="form-group">   
                        <label for="">วันที่จำหน่าย</label>
                        <input type="date"  name="D" value="<?php echo $row['D'];?>">
                        <label for="">LOS</label>
                        <input type="text" name="LOS"  value="<?php echo $row['LOS'];?>" >วัน
                          
                      </div><br>
                      
                      <div class="form-group">อายุ 
                        <label for="">Chronological age</label>
                          <input type="text"  name="Chronological_age" value="<?php echo $row['Chronological_age'];?>">วัน
                          <label for="">PCA</label>
                          <input type="text"name="PCA" value="<?php echo $row['PCA'];?>" >
                          <label for="">Adjusted age</label>
                        <input type="text" name="Adjusted" value="<?php echo $row['Adjusted'];?>" >
                        </div><br>
                        
                        <div class="form-group"> 
                            <label for="">น้ำหนัก</label>
                              <input type="text"  name="weigh" value="<?php echo $row['weigh'];?>">กรัม
                              <label for="">OFC</label>
                              <input type="text" name="OFC2"  value="<?php echo $row['OFC2'];?>" >cms
                              <label for="">ความยาว</label>
                              <input type="text" name="long2" value="<?php echo $row['long2'];?>"   >cms
                            </div><br>
                            <?php 
            $milk = explode(",",$row['milk']);
            foreach($milk_arr as $value){
              if(in_array($value,$milk)){
                echo "<input class='form-check-input' name='milk[]' type='checkbox' value='$value' checked > $value"; 
              }
              else {
                echo "<input class='form-check-input' name='milk[]' type='checkbox' value='$value'  > $value"; 
              }
            }
            ?><br><br>
            <label for="">Formula predominant</label>
            <input
                                        type="text"
                                        name="why"
                                        placeholder="ระบุเหตุผลที่ไม่ได้นมแม่"
                                      value="<?php echo $row['why'];?>"><br><br>
          <label for="">Exclusive formula milk</label>
                               <input
                                        type="text"
                                        name="why2"
                                        placeholder="ระบุเหตุผลที่ไม่ได้นมแม่"
                                      value="<?php echo $row['why2'];?>"><br><br>
                                
                               
                   <button onclick="return confirm('คุณต้องการอัปเดตข้อมูลทารกวันที่จำหน่ายจากโรงพยาบาลหรือไม่')" class="btn btn-success col-2 " type="submit" 
                  style="background-color: rgba(204, 17, 17, 0.904); font-weight:bold; font-family: Bai Jamjuree ;">อัปเดตข้อมูล</button>
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