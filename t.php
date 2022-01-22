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
    <title>การนอนซ้ำโรงพยาบาล</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
    <link rel="stylesheet" href="t.css" />
    
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

        <li class="list">
          <a href="/mom/page/แบบบันทึกข้อมูล.php?HN=<?php echo $row["HN"];?>">
            <span class="icon"
              ><ion-icon name="file-tray-full-outline"></ion-icon
            ></span>
            <span class="title">แบบบันทึกข้อมูล</span>
          </a>
        </li>

        <li class="list"  style="background-color: rgb(248, 247, 246);">
          <a href="/mom/page/t.php?HN=<?php echo $row["HN"];?>">
            <span class="icon"><ion-icon name="alarm-outline"></ion-icon></span>
            <span class="title">การนัดหมาย</span>
          </a>
        </li>
        <li class="list" id="out">
          <a href="/mom/page/notify.php?HN=<?php echo $row["HN"];?>">
            <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
            <span class="title">ช่องทางติดต่อ</span>
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
    <?php
require('dbm.php');
$HN=$_GET['HN'];
$sql = "SELECT * FROM appoint WHERE HN=$HN ORDER BY  id desc";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
?>

<?php foreach ($result as $row) {?>
     
    <div class="container-fluid"  >
    
  <div class="col-sm-6">
    <div class="row">
      
      <div class="card mt-5" id="card"  >
        <div class="card-body" style="background-color:" >
    
    <img src="/img/Medicine.png" width="80">
    <h2>ใบนัดผู้ป่วย</h2>
 
   
      <div class="header">
        
       <label class="" id="HN">HN :</label>
         <input type="text"class="col-sm-2" id=""style="border:none; font-family: Sarabun, sans-serif;" readonly name="HN" value="<?php echo $row['HN'];?>">
         <label class="">ชื่อ-สกุล : </label>
         <input type="text" style="border:none; font-family: Sarabun, sans-serif;" readonly value="<?php echo $row['fname'];?>   <?php echo $row['lname'];?>">
         
</div>
<hr>

  <div class="header " id="">
          
         <div class="mt-2">
        <label for="">วันที่นัด :</label>
        <input style="border:none; font-family: Sarabun, sans-serif;"type="date" name="Nut" id="" readonly value="<?php echo $row['Nut'];?>">
      </div>
      
      <div class="mt-2">
        <label for="">เวลา :</label>
        <input type="time" style="border:none; font-family: Sarabun, sans-serif;" name="t" id="" readonly value="<?php echo $row['t'];?>">
      </div>  
     
      <div class=" mt-2"> 
        <label for="">ห้องตรวจ :</label>
        <input type="text" style="border:none; font-family: Sarabun, sans-serif;" name="room" id="" readonly value="<?php echo $row['room'];?>">
      </div> 
<hr >
</div>

</div>

</div>
      </div>
      </div>
      </div>
      <?php } ?>
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