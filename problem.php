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
    <title>ปัญหาการดูแลทารก</title>

    <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
    <link rel="stylesheet" href="p3.css" />
    
  </head>
  <body>
  <nav
      class="navbar navbar-light"
      style="background-color: rgb(255, 225, 129)"
    >
      <div class="container-fluid">
        <a class="navbar-brand"  style="font-family: Bai Jamjuree;font-weight:bold;"href="#">
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
    
    <h1 style="text-align:center; font-family: Bai Jamjuree;font-weight:bold;"
    >ปัญหาการดูแลทารก</h1>

    <div class="container-fluid">
      <div class="col">
        <div class="row">
          <div class="col-sm-8">
            <div class="card">
              <div
                class="card-body"
                style="background-color: #aedd94;"
              >
                <div class="row">
              <form action="problem_db.php" method="POST">
                <input type="hidden" value="<?php echo $row['HN'];?>" name="HN">
                <div class="form-group">
                <input type="date" style="font-family: Bai Jamjuree;font-weight:bold;" name="da">
              </div>
                <!-- <input type="date" name="da"> -->
                <div class="form-check" style=" margin-top:20px;font-family: Bai Jamjuree;font-weight:bold;"> 
                                          <input class="form-check-input" name="Problem[]" type="checkbox" value="อาการความผิดปกติต่างๆของทารก" id="">อาการความผิดปกติต่างๆของทารก<br>
                                          <input class="form-check-input" name="Problem[]" type="checkbox" value="การได้รับนมของทารก" id="">การได้รับนมของทารก<br>
                                          <input class="form-check-input" name="Problem[]" type="checkbox" value="ยาที่ทารกได้รับและผลข้างเคียงของยา" id="">ยาที่ทารกได้รับและผลข้างเคียงของยา<br>
                                          <input class="form-check-input" name="Problem[]" type="checkbox" value="พัฒนาการ" id="">พัฒนาการ<br>
                                          <input class="form-check-input" name="Problem[]" type="checkbox" value="อื่นๆ" id="">อื่นๆ   
                                      </div>      
                    <div class="input-group flex-nowrap">
                    <input
                      type="text"
                      name="why"
                      class="form-control"
                      placeholder="กรุณาระบุ"
                      
                    />
                  </div>
              
            

             
            <br>
            <button

              type="submit"
              class="btn btn-info"
              style="font-family: Bai Jamjuree;font-weight:bold;"
              

              
            >
              บันทึก
            </button>
          </div>
        </div>
      </form>
      </div>
    </div>
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
