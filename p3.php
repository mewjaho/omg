<?php
require('dbm.php');
$HN=$_GET['HN'];
$sql = "SELECT * FROM Nurse WHERE  HN=$HN";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="p3.css" />
    
    
    <link
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <nav
      class="navbar navbar-light"
      style="background-color: rgb(255, 225, 129)"
    >
      <div class="container-fluid">
        <a class="navbar-brand" style="font-weight:bold;" href="#">
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
        <li class="list active" style="background-color: rgb(248, 247, 246);">
          <b></b>
          <b> </b>
          <a href="#">
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
    <?php
require('dbm.php');
$HN=$_GET['HN'];
$sql = "SELECT * FROM Nurse WHERE HN=$HN";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9">
          <div class="card mt-3" id="c">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <img src="/img/mother.png" class="w-75">
                </div>
                <div class="col-sm">
                  <p class="my-4">
                <div class="form-group"> 
                          <label id="a"for="">ชื่อ-สกุลมารดา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
                          
                          <?php echo $row["mom"];?>&nbsp;&nbsp;
                          <?php echo $row["moml"];?> &nbsp;&nbsp;&nbsp;&nbsp;                                       
                          <label id="a" for="">HN</label>&nbsp;&nbsp;&nbsp;&nbsp; 
                          <?php echo $row["HN_mom"];?>
                          </div><br>
                          
                         
                        <div class="form-group"> 
                          <label id="a" for="" >ชื่อ-สกุลทารก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                         <?php echo $row["fname"];?>&nbsp;&nbsp;
                          <?php echo $row["lname"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <label id="a" for="">HN</label>&nbsp;&nbsp;&nbsp;&nbsp; 
                          <?php echo $row["HN"];?>
                        </div><br>
                         
                
                        <div class="form-group">
                          <label id="a" for="">วันที่เข้ารับการรักษาในโรงพยาบาล</label>&nbsp;&nbsp;
                          <input type="date"  readonly style="border:none; text-align:center;" value="<?php echo $row["admit"];?>">
                          </div><br>
                        <div class="form-group">

                          <label id="a" for="">วัน/เดือน/ปีเกิด</label>&nbsp;&nbsp;
                
                          <input readonly type="date" style="border:none; text-align:center;"value="<?php echo $row["birthday"];?>">
                          <label id="a" for="">เวลา</label>&nbsp;&nbsp;
                          <input type="time" readonly style="border:none;" value="<?php echo $row["t"];?>"><br>
                          </div><br>

                         
                          <div class="form-group"> 
                          <label id="a" for="">อายุครรภ์</label>&nbsp;&nbsp;&nbsp;&nbsp;
                         <?php echo $row["A"];?>&nbsp;&nbsp; สัปดาห์
                          <label id="a" for="">&nbsp;&nbsp;&nbsp;&nbsp;อายุหลังเกิด</label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php echo $row["C"];?>&nbsp;&nbsp; วัน<br>
                          </div><br>
                          
                          <div class="form-group">
                          <label id="a" for="">(กรณี refer) Apgar 1 นาที</label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php echo $row["B"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         
                          <label id="a" for="">Apgar 5 นาที</label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php echo $row["D"];?><br>
                             </div><br>
                          <div class="form-group">
                              <label  id="a" for="">น้ำหนักแรกเกิด</label>&nbsp;&nbsp;&nbsp;&nbsp;
                              <?php echo $row["w"];?>&nbsp;&nbsp;กรัม&nbsp;&nbsp;
                              <label  id="a" for="">OFC</label>&nbsp;&nbsp;
                              <?php echo $row["OFC"];?>&nbsp;&nbsp;cms&nbsp;&nbsp;
                              <label id="a" for="">ความยาว</label>&nbsp;&nbsp;&nbsp;&nbsp;
                              <?php echo $row["long1"];?>&nbsp;&nbsp;cms
                            </div><br>   
                           
                           
            
                    
                  
                    
            
                  </div>
                </div>
                </div>
                </div>
                </div>

                
       <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img
              src="https://s3.theasianparent.com/tap-assets-prod/wp-content/uploads/sites/25/2018/07/%E0%B8%AA%E0%B8%B1%E0%B8%9B%E0%B8%94%E0%B8%B2%E0%B8%AB%E0%B9%8C%E0%B9%81%E0%B8%A3%E0%B8%81%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%A5%E0%B8%B9%E0%B8%81%E0%B9%81%E0%B8%A3%E0%B8%81%E0%B9%80%E0%B8%81%E0%B8%B4%E0%B8%94l.jpg"
              class="card-img-top"
              alt="..."
            />
            <h5 class="card-title" style="font-family: Bai Jamjuree;">
              การดูแลทารกคลอดก่อนกำหนด
            </h5>
            <p class="card-text">ต้องดูแลใกล้ชิดและตรวจร่างกายอย่างสม่ำเสมอ</p>
            <a
              href="https://www.vibhavadi.com/Health-expert/detail/111"
              class="btn btn-primary"
              >Go somewhere</a
            >
          </div>
        </div>
      </div>
    
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img
              src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1535377484/attached_image_th/%E0%B8%97%E0%B9%88%E0%B8%B2%E0%B9%83%E0%B8%AB%E0%B9%89%E0%B8%99%E0%B8%A1%E0%B8%A5%E0%B8%B9%E0%B8%81%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B9%81%E0%B8%A1-pobpad.jpg"
              class="card-img-top"
              alt="..."
              width="20px"
            />
            <h5 class="card-title"style="font-family: Bai Jamjuree;">การให้นมทารก</h5>
            <p class="card-text">การให้นมบุตร</p>
            
            <a
              href="https://www.pobpad.com/%E0%B8%97%E0%B9%88%E0%B8%B2%E0%B9%83%E0%B8%AB%E0%B9%89%E0%B8%99%E0%B8%A1%E0%B8%A5%E0%B8%B9%E0%B8%81%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B9%81%E0%B8%A1"
              class="btn btn-primary"
              >Go somewhere</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img
              src="https://s3.theasianparent.com/tap-assets-prod/wp-content/uploads/sites/25/2018/07/%E0%B8%AA%E0%B8%B1%E0%B8%9B%E0%B8%94%E0%B8%B2%E0%B8%AB%E0%B9%8C%E0%B9%81%E0%B8%A3%E0%B8%81%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%A5%E0%B8%B9%E0%B8%81%E0%B9%81%E0%B8%A3%E0%B8%81%E0%B9%80%E0%B8%81%E0%B8%B4%E0%B8%94l.jpg"
              class="card-img-top"
              alt="..."
            />
            <h5 class="card-title" style="font-family: Bai Jamjuree;">
              การดูแลทารกคลอดก่อนกำหนด
            </h5>
            <p class="card-text">ต้องดูแลใกล้ชิดและตรวจร่างกายอย่างสม่ำเสมอ</p>
            <a
              href="https://www.vibhavadi.com/Health-expert/detail/111"
              class="btn btn-primary"
              >Go somewhere</a
            >
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
