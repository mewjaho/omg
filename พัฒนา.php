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
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
    <link rel="stylesheet" href="/mom/page/1.css" />
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
   
    <h1>พัฒนาการตามอายุปรับ <style></style></h1>
    <div class="container-fluid">
      <div class="btn-group">
        <button
          type="button"
          class="btn btn-danger dropdown-toggle"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          2เดือน
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="4m.php?HN=<?php echo $row["HN"];?>">4เดือน</a></li>
          <li><a class="dropdown-item" href="6.php?HN=<?php echo $row["HN"];?>">6เดือน</a></li>
          <li>
            <a class="dropdown-item" href="9.php?HN=<?php echo $row["HN"];?>">9เดือน</a>
          </li>

          <li><a class="dropdown-item" href="1y.php?HN=<?php echo $row["HN"];?>">1ปี</a></li>
          <li>
            <a class="dropdown-item" href="1y6m.php?HN=<?php echo $row["HN"];?>">1ปี 6เดือน</a>
          </li>
          <li><a class="dropdown-item" href="2y.php?HN=<?php echo $row["HN"];?>">2ปี</a></li>
          <li>
            <a class="dropdown-item" href="2y6m.php?HN=<?php echo $row["HN"];?>">2ปี 6เดือน</a>
          </li>
        </ul>
      </div>
  <form action="2mdb.php" method="POST">
      <div class="col mt-3">
        <input type="hidden" name="HN" value="<?php echo $row["HN"];?>">
        <button
        id="h"
          type="button"
          class="btn"
          style="background-color: rgb(248, 250, 132)"
        >
          1.ยกศีรษะตั้งขึ้นได้ 45 องศา นาน 3 วินาทีขณะนอนคว่ำ (GM)
        </button>

        <div class="row">
          <div class="col-sm-9">
            <div class="card-body">
              <div class="row">
                <table class="table table-bordered border-dark">
                  <thead>
                    <tr style="background-color: ">
                      <th scope="col" width="50">อุปกรณ์</th>
                      <th scope="col" width="250">วิธีประเมิน</th>
                      <th scope="col" width="400">การฝึกทักษะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        กรุ๋งกริ๋ง <br />
                        <img
                          src="https://cf.shopee.co.th/file/dae1148d6a8233aa13324937cebd386a"
                          width="150"
                        />
                      </td>
                      <td>
                        จัดเด็กนอนคว่ำข้อศอกงอ มือทั้งสองข้างวางที่พื้นและสังเกต
                        ว่าเด็กสามารถยกศีรษะ 45 องศา ได้นาน 3 วินาที อาจใช้
                        ของเล่นกระตุ้นให้เด็กยกศรีษะได้ <br />
                        <br /><font color="blue"
                          >ผ่าน : เด็กยกศีรษะตั้งขึ้นได้ประมาณ 45 องศา และได้นาน
                          3 วินาที อย่างน้อย 2 ครั้ง
                        </font>
                      </td>
                      <td>
                        1. จัดเด็กอยู่ในท่านอนคว่ำ ข้อศอกงอ<br />
                        2. หยิบของเล่นมาเขย่าตรงหน้าเด็ก
                        เมื่อเด็กมองที่ของเล่นแล้วก็ค่อยๆ
                        เคลื่อนของเล่นขึ้นด้านบนเพื่อให้เด็กเงยหน้าจน
                        ศีรษะยกขึ้น นับ 1 2 แล้วค่อยๆ เคลื่อนของเล่นลงมาอยู่
                        ตรงหน้าเด็กเหมือนเดิมและทำซ้ำอีกครั้งเพื่อให้เด็กเงยหน้า
                        จนยกศีรษะขึ้นได้ นับ 1 2 3
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <div class="card">
            <div class="card-body" style="background-color: rgb(253, 255, 152)">
              <div class="row" >
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault1"
                    id="flexRadioDefault1"
                    value="ผ่าน"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    ผ่าน
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault1"
                    id="flexRadioDefault1"
                    value="ไม่ผ่าน"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    ไม่ผ่าน
                  </label>

                  <input
                    type="text"
                    name="why1"
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <button
      id="h"
        type="button"
        class="btn"
        style="background-color: rgb(248, 250, 132)"
      >
        2.มองตามสิ่งของจากด้านหนึ่งไปอีกด้านหนึ่ง (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="40">อุปกรณ์</th>
                    <th scope="col" width="320">วิธีประเมิน</th>
                    <th scope="col" width="380">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ลูกบอลผ้าสีแดง
                      <br />
                      <img
                        src="https://cf.shopee.co.th/file/25936b2beaaaceed0a8b2ce8af773645"
                        width="150"
                      />
                    </td>
                    <td>
                      1. จัดเด็กท่านอนหงาย<br />
                      2. กระตุ้นให้เด็กจ้องมองที่ลูกบอลผ้าสีแดง
                      โดยให้ลูกบอลผ้าอยู่เลยจุดกึ่งกลางของใบหน้าเด็กเล็กน้อย

                      <br />
                      3. ค่อยๆ เคลื่อนลูกบอลผ้าสีแดงผ่านจุดกึ่งกลาง
                      ใบหน้าเด็กไปอีกด้านหนึ่ง
                    </td>
                    <td>
                      1. จัดให้เด็กอยู่ในท่านอนหงาย <br />
                      2. ถือของเล่นสีสดใสไม่มีเสียงห่างจากหน้าเด็ก 30 ซม. และ
                      แกว่งของเล่นให้เด็กมองตามอย่างช้าๆ ซ้ายขวาในตำแหน่ง
                      เลยจุดกึ่งกลางใบหน้าเด็กเล็กน้อย<br />
                      3. ถ้าเด็กไม่มองตามให้ช่วยเหลือโดยการประคองหน้าเด็ก
                      เพื่อให้หันมามองหรือใช้หน้าแม่กระตุ้น โดยการแสดง
                      สีหน้ายิ้ม ทำปากพูดคุยแต่ไม่ออกเสียง
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <div class="card">
            <div class="card-body" style="background-color: rgb(253, 255, 152)">
              <div class="row">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault2"
                    id="flexRadioDefault1"
                    value="ผ่าน"
                  />
                  <label class="form-check-label" for="flexRadioDefault">
                    ผ่าน
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault2"
                    id="flexRadioDefault1"
                    value="ไม่ผ่าน"
                  />

                  <label class="form-check-label" for="flexRadioDefault">
                    ไม่ผ่าน
                  </label>

                  <input
                    type="text"
                    name="why2"
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <button
      id="h"
        type="button"
        class="btn"
        style="background-color: rgb(248, 250, 132)"
      >
        3.มองหน้าผู้พูดคุยด้วยได้นาน 5 วินาที (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ;">
                    <th scope="col" width="150">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1. จัดเด็กในท่านอนหงาย<br />
                      2. นั่งลงยื่นหน้าห่างจากเด็กประมาณ 60 ซม.<br />
                      3. พูดกับเด็กในขณะที่เด็กไม่ได้มองหน้า
                    </td>
                    <td>
                      1. ให้เด็กอยู่ในท่านอนหงายหรืออุ้มเด็กให้หน้าห่างจากเด็ก
                      ประมาณ 60 ซม.<br />
                      2. มองตาและพูดคุยให้เด็กสนใจ เช่น ทำตาโต ขยับริมฝีปาก ยิ้ม
                      หัวเราะ สามารถฝึกได้ในหลาย ๆ สถานการณ์ เช่น ขณะให้นมลูก
                      หรือขณะอาบน้ำ เป็นต้น
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <div class="card">
            <div class="card-body" style="background-color: rgb(253, 255, 152)">
              <div class="row">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault3"
                    id="flexRadioDefault1"
                    value="ผ่าน"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    ผ่าน
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault3"
                    id="flexRadioDefault1"
                    value="ไม่ผ่าน"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    ไม่ผ่าน
                  </label>

                  <input
                    type="text"
                    name="why3"
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <button
      id="h"
        type="button"
        class="btn"
        style="background-color: rgb(248, 250, 132)"
      >
        4.ทำเสียงในลำคอ (เสียง “อู” หรือ “อือ” หรือ “อา”) อย่างชัดเจน(EL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: r">
                    <th scope="col" width="220">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ฟังเสียงเด็กขณะทดสอบโดยอยู่ห่างจากเด็กประมาณ 60 ซม.
                      หรือสอบถามพ่อแม่ ผู้ปกครองว่า เด็กทำเสียง “อู” หรือ “อือ”
                      หรือ “อา” ได้หรือไม่
                    </td>
                    <td>
                      อุ้มเด็กในท่านอนหงายระยะห่างพอสมควร
                      สบตาและพูดคุยให้เด็กสนใจ แล้วทำเสียง อู หรือ อือ
                      ในลำคอให้เด็กได้ยิน หยุดฟังเพื่อรอจังหวะให้เด็กส่งเสียงตาม
                      เมื่อเด็กออกเสียง “อู” ได้ ใหเปลี่ยนไปฝึกเสัยง“อือ ” และ
                      “อา” รอให้เด็กออกเสียงตาม
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <div class="card">
            <div class="card-body" style="background-color: rgb(253, 255, 152)">
              <div class="row">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault4"
                    
                    id="flexRadioDefault1"
                    value="ผ่าน"
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    ผ่าน
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault4"
                    id="flexRadioDefault1"
                    value="ไม่ผ่าน"
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    ไม่ผ่าน
                  </label>

                  <input
                    type="text"
                    name="why4"
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <button
      id="h"
        type="button"
        class="btn"
        style="background-color: rgb(248, 250, 132)"
      >
        5.ยิ้มหรือส่งเสียงตอบได้เมื่อแตะต้อง ตัวและพูดคุยด้วย (PS)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="220">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      จัดเด็กท่านอนหงาย ก้มหน้าไปใกล้เด็ก แตะต้องตัวเด็กและ
                      พูดคุยด้วยเพื่อให้เด็กมีการโต้ตอบ
                    </td>
                    <td>
                      อุ้มเด็กในท่านอนหงาย มองตาเด็กและสัมผัสเบาๆ พร้อมกับ
                      พูดคุยกับเด็ก เป็นคำาพูดสั้นๆ ซ้ำๆ ช้าๆ เช่น
                      “ว่าไงจ๊ะ..(ชื่อ ลูก)..คนเก่ง” “ยิ้มซิ” “เด็กดี”
                      “..(ชื่อลูก)..ลูกรัก” “แม่รักลูก นะ”
                      หยุดฟังเพื่อรอจังหวะให้เด็กยิ้มหรือส่งเสียงตอบ
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <div class="card">
            <div class="card-body" style="background-color: rgb(253, 255, 152)">
              <div class="row">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault5"
                    id="flexRadioDefault1"
                    value="ผ่าน"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    ผ่าน
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault5"
                    id="flexRadioDefault1"
                    value="ไม่ผ่าน"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    ไม่ผ่าน
                  </label>

                  <input
                    type="text"
                    name="why5"
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <button
      id="h"
        class="btn btn-danger"
        type="submit"
      >
        บันทึก
      </button>

    </div>
    </form>

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
