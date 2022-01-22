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
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>การนัดหมาย</title>
        <link
          href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap"
          rel="stylesheet"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="appoint.css" />
        
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
            <a class="nav-link active" aria-current="page" href="d1.php">บันทึกข้อมูล</a>
          </li>
          
          
          
            <li class="nav-item " >
              <a class="nav-link"style="margin-left: 900px;" href="/login/doctor.php"   onclick="return confirm('คุณต้องการออกจากระบบหรือไม่')" >ออกจากระบบ</a>
            </li>
          
        </ul>
        
      </div>
    </div>
  </nav>

    <div class="container-fluid"  >
    
  <div class="col-sm-4">
    <div class="row">
      
      <div class="card mt-5" id="card"  >
        <div class="card-body" style="background-color:" >
    <form action  ="appointdb.php" method="POST">
    <img src="/img/Medicine.png" width="80">
    <h2>ใบนัดผู้ป่วย</h2>
      <div class="header" >
        
       <label  class="">HN :</label>
         <input type="text" style="border:none; " readonly name="HN" value="<?php echo $row['HN'];?>"><br>
        <label  class="">ชื่อ : </label>
         <input type="text" size="15" name="fname" style="border:none; " readonly value="<?php echo $row['fname'];?> ">
        
         <input type="text" name="lname" style="border:none;" readonly  value="<?php echo $row['lname'];?>">
         
</div>
<hr>
        <div class="card-body " id="bd">
          
         <div class="mt-2">
        <label for="">วันที่นัด</label>
        <input type="date" style="text-align:center;" name="Nut" id="" required>
      </div>
      
      <div class="mt-2">
        <label for="">เวลา</label>
        <input type="time" name="t" id="" required>
      </div>  
     
      <div class=" mt-2"> 
        <label for="">ห้องตรวจ</label>
        <input type="text" name="room" id="" required>
      </div> 
     
    
      <div class="container-fluid mt-4"> 
        <button 
        
style=" border: 1px solid; margin-left:80px;"
class="btn btn-danger" type="submit" id="sa">บันทึก</button>
</div>
</form>
</div>
</div>
</div>
      </div>
      </div>
      </div>

<?php
require('Dd.php');
$HN=$_GET['HN'];
$sql = "SELECT * FROM appoint WHERE HN=$HN ORDER BY  id desc";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
?>


  <table class="table table-bordered border-dark mt-4" >
  <thead style="background-color: rgb(146,211,110)">
    <tr>
      <th scope="col">HN</th>
      <th scope="col">ชื่อทารก</th>
      <th scope="col">สกุล</th>
      <th scope="col">วันที่นัด</th>
      <th scope="col">เวลา</th>
      <th scope="col">ห้องตรวจ</th>
      <th scope="col">ใบนัด
      </th>
      <th scope="col">ลบ
      </th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($result as $row) {?>
    <tr>
     <form action="a.php" method="POST">
      <td><input type="text" name="HN" style="border:none; text-align:center;" readonly value="<?php echo $row['HN'];?>"></td>
      <td><input type="text" name="fname"  style="border:none; text-align:center;" readonly value="<?php echo $row['fname'];?> "></td>  
      <td><input type="text" name="lname"  style="border:none;  text-align:center;" readonly value="<?php echo $row['lname'];?>"></td>
      <td><input type="date" name="Nut" style="border:none; text-align:center;" readonly value="<?php echo $row['Nut'];?>"></td>
      <td ><input type="text" name="t" style="border:none; text-align:center;" readonly value="<?php echo $row['t'];?>"></td>
      <td><input type="text" name="room" style="border:none; text-align:center;" readonly value="<?php echo $row['room'];?>"></td>
      <td><button type="submit" style="background-color:orange;">ใบนัดผู้ป่วย</td>
      <td><a href="deleteappoint.php?idp=<?php echo $row["Nut"];?>"id="a" class="btn btn-danger" 
        onclick="return confirm('คุณต้องการลบข้อมูลทั้งหมดหรือไม่')"
        >ลบ</a></td>
    </tr>
    </form>
    <?php } ?>

</table>

  


      
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