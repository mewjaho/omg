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
   <title>แบบบันทึกข้อมูล</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="stylesheet" href="print.css">
   
   <link href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
 </head>
 <body>
 <input type="hidden" value="<?php echo $row['HN'];?>" name="HN">
 
<div class="container">
  <div class="row ">
    <div class="col  sm-12">
    <div class="card mt-2" id="card">
    <div class="card-body ">
    
            <div class="form-group">
                          <label class=""  for="">ชื่อ-สกุลมารดา </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="" type="text" readonly
                          value="    <?php echo $row["mom"];?>      <?php echo $row["moml"];?>">&nbsp;
                          <label for="" class="">HN</label>&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" class="col-sm-2" readonly value=" <?php echo $row["HN_mom"];?>">
                          </div><br>
                          
                         
                        <div class="form-group"> 
                          <label class=""  for="" >ชื่อ-สกุลทารก  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class=""  type="text" readonly value="    <?php echo $row["fname"];?>      <?php echo $row["lname"];?>">
                          <label for="" class="">HN</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  class="col-sm-2" readonly value=" <?php echo $row["HN"];?>">
                        </div><br>
                         
                
                        <div class="form-group">
                          <label class=""  for="">วันที่เข้ารับการรักษาในโรงพยาบาล</label>&nbsp;&nbsp;
                          <input class="col-sm-2" id="HN" readonly disable type="date" style="border:none;" value="<?php echo $row["admit"];?>"><br>
</div><br>
                        <div class="form-group">
                          <label class=""  for="">วัน/เดือน/ปีเกิด</label>&nbsp;&nbsp;
                          <input class="col-sm-2"id="HN" readonly style="border:none;" type="date" value="<?php echo $row["birthday"];?>">&nbsp;&nbsp;
                          <label for="">เวลา</label>&nbsp;&nbsp;<input type="time"id="HN"class="" readonly value="<?php echo $row["t"];?>"><br>
                          </div><br>

                         
                          <div class="form-group"> 
                          <label for="">อายุครรภ์</label><input type="text" id="HN" class="col-sm-2" readonly value="<?php echo $row["A"];?>    สัปดาห์"> 
                          <label for="" class="">อายุหลังเกิด</label><input type="text" id="HN" class="" readonly value="<?php echo $row["C"];?>     วัน"><br>
                          </div><br>
                          
                          <div class="form-group">
                          <label for="">(กรณี refer) Apgar 1 นาที</label><input type="text" id="HN" class="" readonly value="<?php echo $row["B"];?>">
                         
                          <label for="">Apgar 5 นาที</label><input type="text" id="HN" class=""readonly value="<?php echo $row["D"];?>"><br>
                             </div><br>
                          <div class="form-group">
                              <label for="">น้ำหนักแรกเกิด</label><input type="text" id="HN" class="" readonly value="<?php echo $row["w"];?>     กรัม">
                              <label for="">OFC</label><input type="text" id="HN" class=""readonly value="<?php echo $row["OFC"];?>     cms"></div><br>
                              <div class="form-group">
                              <label for="">ความยาว</label><input type="text" id="HN" class="" readonly value="<?php echo $row["long1"];?>&nbsp;&nbsp;     cms">
                            </div><br>  
                            <hr id="hr"> 
<?php
require('Dd.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM Nurse2 WHERE $HN=HN";


 


 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);
 



 

 ?>
    
            <label for="">2.1.BFD :</label><input  id="" readonly value="<?php echo $row["BFD"];?>"><br>
        
            <label for="">2.2.PDA :</label><input  id="" readonly value="<?php echo $row["PDA"];?>"><br>
            <label for="">2.3.NEC  ≥ stage 2 :</label><input  id="HN" readonly value="<?php echo $row["NEC"];?>"><br>
            <label for="">2.4.ROP :</label><input  id="" readonly value="<?php echo $row["ROP"];?>"><br>
             stage : <?php echo $row["whyROP"];?><br>
             อื่นๆ : <?php echo $row["whyROP2"];?><br>
            <label for="">2.5.IVH :</label><input  id="" readonly value="<?php echo $row["IVH"];?>"><br>
            <label for="">2.6.PVL :</label><input  id="" readonly value="<?php echo $row["PVL"];?>"><br>
            <label for="">2.7.Hearing Impairment :</label><input  id="" readonly value="<?php echo $row["Hearing"];?>"><br>
            <label for="">2.8.Infection :</label><input  id="" readonly value="<?php echo $row["Infection"];?>"><br>
            อื่นๆ : <input type="text" class="col-sm-2"  readonly value="<?php echo $row["whuROP3"];?>"><br>
           

</div> 
<hr id="hr">       
<?php
require('Dd.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM Nurse3 WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);
 ?>
 
 <div class="container">
  
            <label for="">Status :</label><input  id="" readonly value="<?php echo $row["status"];?>"><br>
            <?php echo $row["sta"];?><br>


     
            </div>
            <hr id="hr">
            <?php
require('Dd.php');
$HN=$_GET['HN'];

 $sql="SELECT *FROM Nurse4 WHERE $HN=HN";

 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);

 ?>
 
  <div class="container">
            <div class="form-group">             
                      <label for="">วันที่จำหน่าย</label><input type="date" id="HN" readonly value="<?php echo $row["D"];?>">
                      <label for="">LOS</label>&nbsp;&nbsp; &nbsp;<input  id="HN" readonly value="<?php echo $row["LOS"];?>">  
                    </div><br>
                    
                    <div class="form-group">
                      <label for="">อายุ  Chronological age</label><input readonly type="text" id="HN" class="col-sm-2" value="<?php echo $row["Chronological_age"];?>    วัน"> 
                       <label for="">PCA</label><input  id="HN" readonly value="<?php echo $row["PCA"];?>">
                      <label for="">Adjusted age</label><input  id="HN" readonly value="<?php echo $row["Adjusted"];?>">
                      </div><br>
                      
                      <div class="form-group"> 
                          <label for="">น้ำหนัก</label><input  id="HN" readonly value="<?php echo $row["weigh"];?>    กรัม">
                         <label for="">OFC</label><input  id="HN" readonly value="<?php echo $row["OFC2"];?>    cms">
                            <label for="">ความยาว</label><input  id="HN" readonly value="<?php echo $row["long2"];?>    cms">
                          </div><br>
                          <div class="form-group"> 
                          <label for="">การให้นมในวันที่จำหน่าย</label><br>
                          <input  type="text" class="col-sm-8" readonly
                          value="<?php echo $row["milk"];?>"></div><br>
            <label for="">เหตุผลที่ไม่ได้รับนมแม่</label><br><input  type="text" class="col-sm-8"readonly value="<?php echo $row["why"];?>">
            <input  type="text" class="col-sm-8" readonly value="<?php echo $row["why2"];?>"><br>
</div>
</div>
                                               
                </div>
            </div>
        </div>
</div>


   
</div>
</div>
                                               

 <button 
   type="button" name="button" class="btn btn-primary"id="print" onclick="window.print();">Print</button>
      
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