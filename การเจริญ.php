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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link
      href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap"
      rel="stylesheet"
    />
   
    
    <link rel="stylesheet" href="/mom/page/pop.css" />
    
    
  <title>ประเมินการเจริญเติบโต</title>
</head>
<body>
<nav
      class="navbar navbar-light"
      style="background-color: rgb(255, 225, 129)"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
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
          <a href="#">
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
    <h1 style="text-align:center;font-family: Mali, cursive;">ประเมินการเจริญเติบโต </h1>
  
<div class="container-fluid">
     
     <div class="col">
     
       <div class="row">
         <div class="col-sm-9">
           <div class="card " id="card" >
             <div class="card-body" style="background-color: rgb(219, 246, 253);">
      
<label>วันที่ปัจจุบัน :</label>
<input type="text" disabled="disabled" value="
<?php
date_default_timezone_set("Asia/Bangkok");
 echo date("j F Y");
?> ">

</p>

<form  action="date.php" method="POST"    > 

  <label>วันเกิด :</label>
<input type="date" name="birthday">

<label>เพศ</label>
<select name="sex" id="sex">
						  <option value="1">ชาย</option>
						  <option value="2">หญิง</option>
						</select>

<div class="input-group mt-3">
            <span class="input-group-text">น้ำหนัก</span>
            <input type="number" min="1" max="120" class="form-control" name="wt" id="wt"
                autocomplete="off" value=""  required>
            <span class="input-group-text">กิโลกรัม</span>                      
    </div>
    <div class="input-group mt-3">
            <span class="input-group-text">ส่วนสูง</span>
            <input type="number" min="50" max="210" class="form-control" name="ht" id="ht"
                autocomplete="off" value=""  required>
            <span class="input-group-text">เซนติเมตร</span>
    </div>     

    <div class="input-group mt-3">
            <span class="input-group-text">รอบศรีษะ</span>
            <input type="number" min="50" max="210" class="form-control" name="hth" id="ht"
                autocomplete="off" value=""  required>
            <span class="input-group-text">เซนติเมตร</span>
    </div> 
    <div class="col my-2" >
 
                <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-danger">
                    ดูผล</button>
           </div>     
                  
           </div>
           </div>
           </div>
           </form>
           
    </div>
  </div>
</div>

</div>

</div>     








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


