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
            <a class="nav-link active" style="font-weight: bold;"aria-current="page" href="Home.php">หน้าหลัก</a>
          </li>
          <li class="nav-item">
                <a class="nav-link"style="font-weight: bold;" href="/doctor/page/d1.php" >บันทึกข้อมูล</a>
               
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
        <a href="follow.php?HN=<?php echo $row["HN"];?>" class="list-group-item list-group-item-action" id="side" >ข้อมูลทั่วไป</a>
        <a href="follow2.php?HN=<?php echo $row["HN"];?>" class="list-group-item list-group-item-action" id="side">ปัญหาที่เกิดขึ้นกับทารก</a>
        <a href="follow3.php?HN=<?php echo $row["HN"];?>" class="list-group-item list-group-item-action" id="side">การเจริญเติบโต</a>
        <a href="follow4.php?HN=<?php echo $row["HN"];?>" class="list-group-item list-group-item-action" id="side" style="background-color: 	
          rgb(242,201,251); color: black;" >
            พัฒนาการของทารก
          </a>
          
          
          
          
        </div>




      </div>
      <?php
require('Dm.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM a WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);

 ?>
      <div class="col">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
               <div class="card-body ">
                <h4 class="card-header  text-white container col-4" 
                style="background-color: rgb(158,118,180)" 
                >พัฒนาการของทารก</h4>

                <div class="card-body col-12 mt-3 "
                              > 
               
                              <div class="container-fluid mt-2">          
      <button type="button " class="btn btn-danger " > 2 เดือน</button>
                    </div>
<ol>
                     <li>ยกศีรษะตั้งขึ้นได้ 45 องศา นาน 3 วินาทีขณะนอนคว่ำ (GM)
                     <div class="form-check">
                  <div class="echo">
                     <?php
                if($row["flexRadioDefault1"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault1'  value='ผ่าน' checked>ผ่าน";
                }else if($row["flexRadioDefault1"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault1' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                 <input type="text" value="<?php echo $row['why1'];?>" readonly>
                   </li><br>


                    <li>มองตามสิ่งของจากด้านหนึ่งไปอีกด้านหนึ่ง (FM)
                     <div class="form-check">
                     <div class="echo">
                     <?php
                if($row["flexRadioDefault2"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault2' value='ผ่าน' checked>ผ่าน";
                }else if($row["flexRadioDefault2"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault2' value='ไม่ผ่าน'checked >ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                  <label>เหตุผล :</label><input type="text" value="<?php echo $row['why2'];?>" readonly>
                    </li><br>

                   

                    <li>มองหน้าผู้พูดคุยด้วยได้นาน 5 วินาที (RL)
                     <div class="form-check">
                     <div class="echo">
                     <?php
                if($row["flexRadioDefault3"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault3' value='ผ่าน' checked>ผ่าน";
                }else if($row["flexRadioDefault3"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault3' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why3'];?>" readonly>
                    </li><br>

                    <li>ทำเสียงในลำคอ (เสียง “อู” หรือ “อือ” หรือ “อา”) อย่างชัดเจน (EL)
                     <div class="form-check">
                     <div class="echo">
                     <?php
                if($row["flexRadioDefault4"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault4' value='ผ่าน' checked>ผ่าน";
                }else if($row["flexRadioDefault4"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault4' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why4'];?>" readonly>
                    </li><br>

                    <li>ยิ้มหรือส่งเสียงตอบได้เมื่อแตะต้องตัวและพูดคุยด้วย (PS)
                     <div class="form-check">
                     <div class="echo">
                     <?php
                if($row["flexRadioDefault5"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault5' value='ผ่าน'checked >ผ่าน";
                }else if($row["flexRadioDefault5"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault5' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why5'];?>" readonly>
                    </li>

                    </ol>
           <hr>   
                    <?php
require('Dm.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM b WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);

 ?>                

                    <div class="container-fluid mt-6">          
      <button type="button " class="btn btn-danger"  >4 เดือน</button>
                    </div>
<ol>
                     <li>ท่านอนคว่ำยกอกพ้นพื้น (GM)
                     <div class="form-check">
                     <div class="echo">
                    
                     <?php
                if($row["flexRadioDefault1"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault1' value='ผ่าน' checked>ผ่าน";
                }else if($row["flexRadioDefault1"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault1' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why1'];?>" readonly>
                   </li><br>


                    <li>มองตามสิ่งของที่เคลื่อนที่ได้เป็นมุม 180 องศา (FM)
                     <div class="form-check">
                     <div class="echo">
                     <?php
                if($row["flexRadioDefault2"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault2' value='ผ่าน' checked>ผ่าน";
                }else if($row["flexRadioDefault2"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault2' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why2'];?>" readonly></li><br>

                   

                    <li>หันตามเสียงได้ (RL)
                     <div class="form-check">
                     <div class="echo">
                     <?php
                if($row["flexRadioDefault3"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault3' value='ผ่าน' checked>ผ่าน";
                }else if($row["flexRadioDefault3"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault3' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why3'];?>" readonly></li><br>

                    <li>ทำเสียงสูงๆ ต่ำๆ โต้ตอบเวลาพูดคุย (EL)
                     <div class="form-check">
                     <div class="echo">
                     <?php
                if($row["flexRadioDefault4"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault4' value='ผ่าน' checked>ผ่าน";
                }else if($row["flexRadioDefault4"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault4' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why4'];?>" readonly></li><br>

                    <li>ยิ้มทักและยิ้มตอบ (PS)
                     <div class="form-check">
                     <div class="echo">
                     <?php
                if($row["flexRadioDefault5"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault5' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault5"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault5' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?><br>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why5'];?>" readonly></li><br>

                    </ol>

                   <hr> 
                   <?php
require('Dm.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM c WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);

 ?>                             
                 
                                    <div class="container-fluid mt-6">          
                                      <button type="button " class="btn btn-danger"  >6 เดือน</button>
                                                    </div>
                                <ol>
                                                     <li>ยันตัวขึ้นจากท่านอนคว่ำ โดยแขนเหยียดตรงทั้งสองข้างได้ (GM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault1"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault1' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault1"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault1' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why1'];?>" readonly></li><br>
                                
                                
                                                    <li>ดึงขึ้นนั่งจากท่านอนหงาย เด็กสามารถชัน / ยกศีรษะขึ้นมาก่อนลำตัว (GM) 
                                                      
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault2"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault2' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault2"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault2' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why2'];?>" readonly></li><br>
                                
                                                   
                                
                                                    <li>พลิกคว่ำขณะนอนหงายได้ (GM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault3"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault3' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault3"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault3' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why3'];?>" readonly></li><br>
                                
                                                    <li>อื้อมมือหยิบและถือวัตถุไว้ ขณะอยู่ในท่านอนหงายหรือนั่งตัก (FM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault4"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault4' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault4"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault4' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why4'];?>" readonly></li><br>
                                
                                                    <li>สนใจฟังคนพูดและสามารถมองไปที่ของเล่นที่ผู้ทดสอบเล่นกับเด็ก (RL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault5"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault5' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault5"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault5' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why5'];?>" readonly></li><br>
                                                  
                                                    <li>เลียนแบบการเล่นทำเสียงได้ (EL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault6"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault6' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault6"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault6' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why6'];?>" readonly></li><br>
                
                                                    <li>จ้องมองหรือร้องไห้เมื่อเห็นคนแปลกหน้า (PS)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault7"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault7' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault7"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault7' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why7'];?>" readonly><br>
                                                  </li>
                                
                                                    </ol>

<hr>
<?php
require('Dm.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM d WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);

 ?>   
<div class="container-fluid mt-6">          
                                                      <button type="button " class="btn btn-danger"  >9 เดือน</button>
                                                                    </div>
                                                <ol>
                                                                     <li>ลุกขึ้นนั่งได้จากท่านอน (GM)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault1"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault1' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault1"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault1' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why1'];?>" readonly></li><br>
                                                
                                                
                                                                    <li>ยืนอยู่ได้โดยใช้มือเกาะเครื่องเรือนสูงระดับอก (GM) 
                                                                      
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault2"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault2' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault2"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault2' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why2'];?>" readonly></li><br>
                                                                    <li>หยิบก้อนไม้จากพื้นและถือไว้มือละชิ้น (FM)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault3"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault3' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault3"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault3' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why4'];?>" readonly></li><br>
                                                
                                                                    <li>ใช้นิ้วหัวแม่มือ และนิ้วอื่น ๆ หยิบของขึ้นจากพื้น (FM)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault4"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault4' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault4"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault4' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why4'];?>" readonly></li><br>
                                                
                                                                    <li>ทำตามคำสั่งง่าย ๆ เมื่อใช้ท่าทางประกอบ (RL)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault5"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault5' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault5"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault5' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why5'];?>" readonly></li><br>
                                                                    <li>เด็กรู้จักการปฏิเสธด้วยการ
                                                                      แสดงท่าทาง (EL)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault6"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault6' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault6"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault6' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why6'];?>" readonly></li><br>

                                                                    <li>เลียนเสียงคำพูดที่คุ้นเคยได้
                                                                      อย่างน้อย 1 เสียง (EL)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault7"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault7' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault7"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault7' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why7'];?>" readonly>
                                                                  </li><br>
                
                                                                  <li>ใช้นิ้วหยิบอาหารกินได้ (PS)
                                                                   <div class="form-check">
                                                                   <div class="echo">
                                                                   <?php
                if($row["flexRadioDefault8"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault8' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault8"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault8' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why8'];?>" readonly>
                                                                
                                                                </li>
                
                                                                
                                                                    </ol>    
                                                                   <hr> 
                                                
<?php
require('Dm.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM e WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);

 ?>                           
                                                    <div class="container-fluid mt-6">          
                                                      <button type="button " class="btn btn-danger" >1 ปี</button>
                                                                    </div>
                                                <ol>
                                                                     <li>ยืนอยู่ตามลำพังได้นาน 2 วินาที (GM)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                   
                                                                     <?php
                if($row["flexRadioDefault1"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault1' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault1"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault1' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why1'];?>" readonly></li><br>
                                                
                                                
                                                                    <li>จีบนิ้วมือเพื่อหยิบของชิ้นเล็ก (FM)
                                                                      
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault2"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault2' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault2"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault2' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why2'];?>" readonly></li><br>
                                                
                                                                   
                                                
                                                                    <li>โบกมือหรือตบมือตามคำสั่ง (RL)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault3"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault3' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault3"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault3' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why3'];?>" readonly></li><br>
                                                
                                                                    <li>แสดงความต้องการ โดยทำท่าทางหรือเปล่งเสียง (EL)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault4"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault4' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault4"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault4' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why4'];?>" readonly></li><br>
                                                
                                                                    <li>เล่นสิ่งของตามประโยชน์ของสิ่งของได้ (PS)
                                                                     <div class="form-check">
                                                                     <div class="echo">
                                                                     <?php
                if($row["flexRadioDefault5"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault5' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault5"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault5' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why5'];?>" readonly></li>
                                                                
                                                                    </ol>

<hr>

<?php
require('Dm.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM f WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);

 ?>     
                                <div class="container-fluid mt-6">          
                                      <button type="button " class="btn btn-danger"  >1 ปี 6 เดือน</button>
                                                    </div>
                                <ol>
                                                     <li>วิ่งได้ (GM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault1"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault1' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault1"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault1' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why1'];?>" readonly></li><br>
                                
                                
                                                    <li>เดินถือลูกบอลไปได้ไกล 3 เมตร (GM) 
                                                      
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault2"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault2' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault2"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault2' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why2'];?>" readonly></li><br>
                                
                                                   
                                
                                                    <li>เปิดหน้าหนังสือที่ทำด้วยกระดาษแข็งทีละแผ่นได้เอง (FM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault3"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault3' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault3"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault3' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why3'];?>" readonly></li><br>
                                
                                                    <li>ต่อก้อนไม้ 2 ชั้น (FM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault4"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault4' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault4"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault4' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why4'];?>" readonly></li><br>
                                
                                                    <li>เลือกวัตถุตามคำสั่งได้ถูกต้อง 3 ชนิด (RL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault5"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault5' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault5"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault5' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why5'];?>" readonly></li><br>
                                                  
                                                    <li>ชี้อวัยวะได้ 1 ส่วน (RL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault6"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault6' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault6"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault6' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why6'];?>" readonly></li><br>
                
                                                    <li>พูดเลียนคำที่เด่นหรือคำสุดท้ายของคำพูด (EL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault7"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault7' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault7"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault7' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why7'];?>" readonly>
                                                  </li><br>
                                                  <li>พูดเป็นคำๆ ได้ 4 คำเรียกชื่อสิ่งของหรือทักทาย (EL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault8"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault8' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault8"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault8' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why8'];?>" readonly><br>
                                                  
                                                  </li>

                                                  <li>สนใจและมองตามสิ่งที่ผู้ใหญ่ชี้ที่อยู่ไกลออกไปประมาณ
                                                    3 เมตร (PS)
                                                   <div class="form-check">
                                                   <div class="echo">
                                                   <?php
                if($row["flexRadioDefault9"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault9' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault9"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault9' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why5'];?>" readonly><br>
                                                
                                                </li>

                                                <li>ดื่มน้ำจากถ้วยโดยไม่หก (PS)
                                                 <div class="form-check">
                                                 <div class="echo">
                                                 <?php
                if($row["flexRadioDefault10"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault10' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault10"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault10' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why10'];?>" readonly>
                                              </li>
                                
                                                    </ol>    
                <hr>    
                <?php
require('Dm.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM g WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);

 ?>                                     
                                              <div class="container-fluid mt-6">          
                                      <button type="button " class="btn btn-danger"  >2 ปี </button>
                                                    </div>
                                <ol>
                                                     <li>เด็กเหวี่ยงขาเตะลูกบอลได้ (GM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault1"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault1' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault1"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault1' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why1'];?>" readonly></li><br>
                                
                                
                                                    <li>ต่อก้อนไม้ 4 ชั้น (FM) 
                                                      
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault2"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault2' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault2"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault2' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why2'];?>" readonly></li><br>
                                
                                                   
                                
                                                    <li>เลือกวัตถุตามคำสั่ง (ตัวเลือก 4 ชนิด) 
                                                      (RL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault3"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault3' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault3"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault3' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why3'];?>" readonly></li><br>
                                
                                                    <li>เลียนคำพูดที่เป็นวลีประกอบด้วยคำ
                                                      2 คำขึ้นไป (EL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault4"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault4' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault4"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault4' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why4'];?>" readonly></li><br>
                                
                                                    <li>ใช้ช้อนตักอาหารกินเองได้ (PS)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault5"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault5' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault5"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault5' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why5'];?>" readonly></li><br>
                                
                                                    </ol>
<hr>
<?php
require('Dm.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM h WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);

 ?>                
                                                    <div class="container-fluid mt-6">          
                                      <button type="button " class="btn btn-danger"  >2 ปี 6 เดือน</button>
                                                    </div>
                                <ol>
                                                     <li>กระโดดข้ามเชือกบนพื้นไปข้างหน้าได้ (GM) 
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault1"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault1' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault1"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault1' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why1'];?>" readonly></li><br>
                                
                                
                                                    <li>ขว้างลูกบอลขนาดเล็กได้โดยยกมือขึ้นเหนือศีรษะ (GM)
                                                      
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault2"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault2' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault2"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault2' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why2'];?>" readonly></li><br>
                                
                                                   
                                
                                                    <li>ต่อก้อนไม้สี่เหลี่ยมลูกบาศก์เป็นหอสูงได้ 8 ก้อน (FM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault3"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault3' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault3"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault3' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why3'];?>" readonly></li><br>
                                
                                                    <li>ต่อก้อนไม้ 2 ชั้น (FM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault4"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault4' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault4"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault4' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why4'];?>" readonly></li><br>
                                
                                                    <li>ยื่นวัตถุให้ผู้ทดสอบได้ 1 ชิ้น 
                                                      ตามคำบอก (รู้จำนวนเท่ากับ 1) 
                                                      (FM)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault5"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault5' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault5"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault5' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why5'];?>" readonly></li><br>
                                                  
                                                    <li>สนใจฟังนิทานได้นาน 5 นาที
                                                      (RL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault6"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault6' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault6"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault6' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why6'];?>" readonly></li><br>
                
                                                    <li>วางวัตถุไว้ “ข้างบน” และ 
                                                      “ข้างใต้” ตามคำสั่งได้ (RL)
                                                     <div class="form-check">
                                                     <div class="echo">
                                                     <?php
                if($row["flexRadioDefault7"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault7' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault7"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault7' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why7'];?>" readonly>
                                                  
                                                  </li><br>

                                                  <li>พูดติดต่อกัน 2 คำขึ้นไปอย่างมีความหมายโดยใช้คำกริยาได้ถูกต้องอย่างน้อย 4 กริยา (EL)
                                                   <div class="form-check">
                                                   <div class="echo">
                                                   <?php
                if($row["flexRadioDefault8"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault8' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault8"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault8' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div>
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why8'];?>" readonly>
                                                
                                                </li><br>

                                                <li>ร้องเพลงได้บางคำหรือร้องเพลงคลอตามทำนอง (PS)
                                                 <div class="form-check">
                                                 <div class="echo">
                                                 <?php
                if($row["flexRadioDefault9"] == "ผ่าน"){
                  echo "<input  type='checkbox' name='flexRadioDefault9' value='ผ่าน' checked >ผ่าน";
                }else if($row["flexRadioDefault9"] == "ไม่ผ่าน"){
                  echo "<input type='checkbox' name='flexRadioDefault9' value='ไม่ผ่าน' checked>ไม่ผ่าน";
                }else {
                  echo "ยังไม่ได้บันทึกข้อมูล";
                }
                 ?></div> 
                 <label>เหตุผล :</label>
                  <input type="text" value="<?php echo $row['why9'];?>" readonly><br>
                                              
                                              </li><br>

                                              
                                
                                                    </ol>    


                 
                 
                  </div>

                  
               </div>
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