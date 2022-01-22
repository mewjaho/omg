<?php

$HN=$_POST['HN'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Nut=$_POST['Nut'];
$t=$_POST['t'];
$room=$_POST['room'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="a.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link
          href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap"
          rel="stylesheet"
        />
</head>
<body>
<div class="container-fluid"  >
   
<div class="card mt-5 ">
  <div class="card-header">
  <img src="/img/Medicine.png" width="80">
      <h2>ใบนัดผู้ป่วย</h2><br>
      <label class="" id="HN">HN :</label>
           <input type="text" readonly style="border:none;" value="<?php echo $HN;?>">

          <label class="" id="">ชื่อ-สกุล : </label>
           <input type="text" readonly style="border:none;" value="<?php echo $fname;?>   <?php echo $lname;?>">
  </div>
  <div class="card-body">
  
    
            
         

           <div class="mt-2"> 
          <label for="">วันที่นัด :</label>
          <input type="date" readonly style="border:none;" value="<?php echo $Nut;?>">
        </div>
        
        <div class="mt-2">
          <label for="">เวลา :</label>
          <input type="time" readonly style="border:none;" value="<?php echo $t;?>">
        </div>  
       
        <div class=" mt-2"> 
          <label for="">ห้องตรวจ :</label>
          <input type="text" readonly style="border:none;" value="<?php echo $room;?>">
        </div> 

  </div>
  
  </div>
  
  </div>
  <button 
   type="button" name="button" class="btn btn-primary"id="print" onclick="window.print();">Print</button>
</body>
</html>