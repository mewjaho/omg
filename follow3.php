<?php
require('Dd.php');
 $HN=$_GET['HN'];
 $sql = "SELECT * FROM Nurse WHERE HN=$HN";
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
      <a class="navbar-brand" id="side" href="#">Preterm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" id="side" href="Home.php">หน้าหลัก</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="/doctor/page/d1.php" id="side" >บันทึกข้อมูล</a>
               
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
        <a href="follow.php?HN=<?php echo $row["HN"];?>" id="side" class="list-group-item list-group-item-action" >ข้อมูลทั่วไป</a>
        <a href="follow2.php?HN=<?php echo $row["HN"];?>" id="side" class="list-group-item list-group-item-action">ปัญหาที่เกิดขึ้นกับทารก</a>
         <a href="#" class="list-group-item list-group-item-action"id="side" style="background-color: 	
          rgb(242,201,251); color: black;" >
            การเจริญเติบโต
          </a>
          
          
          <a href="follow4.php?HN=<?php echo $row["HN"];?>" id="side"class="list-group-item list-group-item-action">พัฒนาการของทารก</a>
          
        </div>




      </div>
      <?php
require('Dm.php');
 $HN=$_GET['HN'];

 $sql="SELECT *FROM m3 WHERE $HN=HN ORDER BY  id desc";

 $result=mysqli_query($connect,$sql);
 $row=mysqli_fetch_assoc($result);
 

?>
      <div class="col">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
               <div class="card-body ">
                <h4 class="card-header  text-white container col-3" 
                style="background-color: rgb(158,118,180)" 
                >การเจริญเติบโต</h4>

                <div class="card-body col-12 mt-3 "
                              style="background-color:">
<?php foreach ($result as $row) {?>
                            
  <div class="container-fluid mt-3">     
                <input type="button" class="btn btn-danger"  name="" value="<?php echo $row['da'];?>" ><br>
                 
                         <label style="margin-top :20px;"for="" >วันที่บันทึก :</label>
                         <input type="date" name=""  readonly value="<?php echo $row['date'];?>"></div>
                          <div class="container-fluid mt-3">
                          <label for="" >น้ำหนัก :</label>
                          <input type="text" name="" readonly value="<?php echo $row['weight'];?>" >กรัม
                          <label for="">ยาว :</label>
                          <input type="text" name=""  readonly value="<?php echo $row['height'];?>">cms
                          <label for="">รอบศรีษะ :</label>
                          <input type="text" name="" readonly value="<?php echo $row['head'];?>">cms
                    </div>
<hr>
        
<?php } ?>  
    
    

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