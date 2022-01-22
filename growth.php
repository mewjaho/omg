<?php
require('dbm.php');
$HN=$_GET['HN'];
$sql = "SELECT * FROM Nurse WHERE HN=$HN";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>บันทึกการเจริญเติบโตของทารก</title>
   
    <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
    <link rel="stylesheet" href="/mom/page/p3.css" />
    
  </head>
  <body>
  <nav
      class="navbar navbar-light"
      style="background-color: rgb(255, 225, 129)"
    >
      <div class="container-fluid">
        <a class="navbar-brand" style="font-weight:bold;"href="#">
          <img
            src="/img/b.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-text-top"
          />&nbsp;&nbsp; Preterm Follow Up
        </a>
      </div>
    </nav>
    <div class="navigation mt-5">
      <ul>
        <li class="list active">
          <b></b>
          <b> </b>
          <a href="/mom/page/p3.php?HN=<?php echo $row["HN"];?>">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="title">Home</span>
          </a>
        </li>

        <li class="list" style="background-color: rgb(248, 247, 246);">
          <a href="/mom/page/แบบบันทึกข้อมูล.php?HN=<?php echo $row["HN"];?>">
            <span class="icon"
              ><ion-icon name="file-tray-full-outline"></ion-icon
            ></span>
            <span class="title">แบบบันทึกข้อมูล</span>
          </a>
        </li>

        <li class="list">
          <a href="/mom/page/t.php?HN=<?php echo $row["HN"];?>">
            <span class="icon"><ion-icon name="alarm-outline"></ion-icon></span>
            <span class="title">การนัดหมาย</span>
          </a>
        </li>

        <li class="list" id="out">
          <a href="#">
            <span class="icon"
              ><ion-icon name="chatbox-ellipses-outline"></ion-icon
            ></span>
            <span class="title">คำถามที่พบบ่อย</span>
          </a>
        </li>
        <li class="list">
          <a href="/mom/page/login.php">
            <span class="icon"
            onclick="return confirm('คุณต้องการออกจากระบบหรือไม่')"
              ><ion-icon name="log-out-outline"></ion-icon
            ></span>
            <span class="title">ออกจากระบบ</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="toggle">
      <ion-icon name="menu-outline" class="open"></ion-icon>
      <ion-icon name="close-outline" class="close"></ion-icon>
    </div>
    <br />
<h1 style="  font-family: Bai Jamjuree; text-align:center; color:black;">แบบบันทึกข้อมูลการเจริญเติบโตของทารก</h1>

    <div class="container-fluid">
   
    <img class="col float-sm-end  " id="baby" src="/img/baby.png" width="25%"> 

       <div class="row">
       
         <div class="col-sm-8 " id="gr" >
           <div class="card mt-4" >
             <div class="card-body" style="background-color:#F8D7C1;">
               <div class="row">
                
               <form action="growthdb.php" method="POST">
               <input type="hidden" value="<?php echo $row['HN'];?>" name="HN">
               <label>วันที่ :</label>
<input type="date" required name="date"><br>
<label>อายุทารก :</label>
<select name="da" id="da" style="padding:5px; margin-top: 10px; border-radius: 10px;" class="select" >

<option  value="2เดือน">2 เดือน</option>
<option value="4เดือน">4 เดือน</option>
<option value="6เดือน">6 เดือน</option>
<option value="9เดือน">9 เดือน</option>
<option value="1ปี">1 ปี</option>
<option value="1ปี6เดือน">1 ปี 6 เดือน</option>
<option value="2ปี">2 ปี</option>
<option value="2ปี6เดือน">2 ปี 6 เดือน</option>
</select>

<div class="input-group mt-3">
            <span class="input-group-text" id="b">น้ำหนัก *</span>
            <input type="number" min="" max="" class="form-control" name="weight" id="weight"
                autocomplete="off" step="0.1" value=""  required>
            <span class="input-group-text" id="b">กิโลกรัม</span>                      
    </div>
    <div class="input-group mt-3">
            <span class="input-group-text" id="b">ส่วนสูง *</span>
            <input type="number" min="" max="" class="form-control" name="height" id="height"
                autocomplete="off" value=""  required>
            <span class="input-group-text" id="b">เซนติเมตร</span>
    </div>     

    <div class="input-group mt-3">
            <span class="input-group-text" id="b">รอบศรีษะ *</span>
            <input type="number" min="" max="" class="form-control" name="head" id="head"
                autocomplete="off" value=""  required>
            <span class="input-group-text" id="b">เซนติเมตร</span>
    </div> 
    <div class="col my-2" >
 
 <button type="submit"name="btn_submit" id="save" class="btn btn-danger">
     บันทึกข้อมูล</button>
</div>     
</form>
</div>
</div>

</div>

</div>

</div>

<h1 style=" margin-top:40px; font-family: Bai Jamjuree; text-align:center; color:black;">การเจริญเติบโตของทารก</h1>
<?php
require('Dm.php');

$sql = "SELECT * FROM m3 WHERE HN=$HN  ORDER BY  id desc";
$result=mysqli_query($connect,$sql);


?>
<table class="table table-bordered border-dark mt-4" id="ta"style="border:solid 1px black; ;
" >
  <thead style="background-color: rgb(146,211,110)">
    <tr style="text-align:center;">
      <th scope="col">HN</th>
      <th scope="col">วันที่</th>
      <th scope="col">อายุ</th>
      <th scope="col">น้ำหนัก    (กิโลกรัม)</th>
      <th scope="col">ส่วนสูง    (เซนติเมตร)</th>
      <th scope="col">รอบศรีษะ    (เซนติเมตร)</th>
      <th scope="col">ลบ </th>
     
    
    </tr>
  </thead>
  <tbody>
 
  <?php foreach ($result as $row) {?>
    <tr>
      <td><input type="text" name="HN" style="border:none; text-align:center;" readonly value="<?php echo $row['HN'];?>"></td>
      <td><input type="date" name="date"  style="border:none; text-align:center;" readonly value="<?php echo $row['date'];?>"></td>  
      <td><input type="text" name="da"  style="border:none;  text-align:center;" readonly value="<?php echo $row['da'];?>"></td>
      <td><input type="text" name="weight" style="border:none; text-align:center;" readonly value="<?php echo $row['weight'];?>"></td>
      <td ><input type="text" name="height" style="border:none; text-align:center;" readonly value="<?php echo $row['height'];?>"></td>
      <td><input type="text" name="head" style="border:none; text-align:center;" readonly value="<?php echo $row['head'];?>"></td>
      <td><a href="/mom/page/delete.php?idp=<?php echo $row["da"];?>"id="a" class="btn btn-danger" 
        onclick="return confirm('คุณต้องการลบข้อมูลทั้งหมดหรือไม่')"
        >ลบ</a>
     
       

    </tr>
    <?php } ?>

</table>
<script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script>
      let menuToggle = document.querySelector(".toggle");
      let navigation = document.querySelector(".navigation");
      menuToggle.onclick = function () {
        menuToggle.classList.toggle("active");
        navigation.classList.toggle("active");
      };
      let list = document.querySelectorAll(".list");
      for (let i = 0; i < list.length; i++) {
        list[i].onclick = function () {
          let j = 0;
          while (j < list.length) {
            list[j++].className = "list ";
          }
          list[i].className = "list active";
        };
      }
    </script>       
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