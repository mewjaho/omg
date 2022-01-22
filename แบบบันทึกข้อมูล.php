
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
   

    <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap-grid.min.css"
    />
    <link rel="stylesheet" href="style3.css" />
    <title>แบบบันทึกข้อมูล</title>
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
          />&nbsp;&nbsp;
          Preterm Follow Up
        </a>
      </div>
    </nav>
    <?php
require('dbm.php');
$HN=$_GET['HN'];
$sql = "SELECT * FROM Nurse WHERE HN=$HN";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
?>

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
          <a href="#">
            <span
            class="icon"
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
    <div class="row">
     
      <div class="col-sm-8">
        <div class="card">
          <h1>แบบบันทึกข้อมูล</h1>
          <div class="card-body">
            <div class="row">
              
    

    <div class="list-group" class="container-fluid">
      <a
        href="การนอนโรงพยาบาล.php?HN=<?php echo $row["HN"];?>"
        class="list-group-item list-group-item-action" style="background-color:rgb(242,201,251);"
        >การนอนโรงพยาบาลซ้ำ
      </a>

      <a
        href="ตรวจตามนัด.php?HN=<?php echo $row["HN"];?>"
        class="list-group-item list-group-item-action " style="background-color:	
        rgb(145,228,251);"
        >การมาตรวจตามนัดครั้งแรก</a
      >
      <a href="growth.php?HN=<?php echo $row["HN"];?>" class="list-group-item " style="background-color:#F8D7C1;"
        >บันทึกการเจริญเติบโตของทารก</a
      >
      <a href="e.php?HN=<?php echo $row["HN"];?>" class="list-group-item " style="background-color:	
      rgb(168,198,250);"
        >การเจริญเติบโตตามอายุปรับ</a
      >
      <a href="problem.php?HN=<?php echo $row["HN"];?>" class="list-group-item "style="background-color:       	
rgb(174,221,148);">ปัญหาการดูแลทารก</a
      >
      <a
        href="พัฒนา.php?HN=<?php echo $row["HN"];?>"
        class="list-group-item list-group-item-action" style="background-color: 	
        rgb(254,248,160);"
        >พัฒนาการตามอายุ</a
      >
      
      
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
          while (j <list.length) {
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
