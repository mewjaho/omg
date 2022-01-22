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
    <link rel="stylesheet" href="1.css" />
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
          1ปี
        </button>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="พัฒนา.php?HN=<?php echo $row["HN"];?>">2เดือน</a>
          </li>
          <li><a class="dropdown-item" href="4m.php?HN=<?php echo $row["HN"];?>">4เดือน</a></li>
          <li><a class="dropdown-item" href="6.php?HN=<?php echo $row["HN"];?>">6เดือน</a></li>
          <li>
            <a class="dropdown-item" href="9.php?HN=<?php echo $row["HN"];?>">9เดือน</a>
          </li>

          <li>
            <a class="dropdown-item" href="1y6m.php?HN=<?php echo $row["HN"];?>">1ปี 6เดือน</a>
          </li>
          <li><a class="dropdown-item" href="2y.php?HN=<?php echo $row["HN"];?>">2ปี</a></li>
          <li>
            <a class="dropdown-item" href="2y6m.php?HN=<?php echo $row["HN"];?>">2ปี 6เดือน</a>
          </li>
        </ul>
      </div>
      <div class="col mt-3">
      <form action="1ydb.php" method="POST"> 
      <input type="hidden" name="HN" value="<?php echo $row["HN"];?>">
        <button
        id="h"

          type="button"
          class="btn"
          style="background-color: rgb(248, 250, 132)"
        >
          1.ยืนอยู่ตามลำพังได้นาน 2 วินาที (GM)
        </button>

        <div class="row">
          <div class="col-sm-9">
            <div class="card-body">
              <div class="row">
                <table class="table table-bordered border-dark">
                  <thead>
                    <tr style="background-color: ">
                      <th scope="col" width="220">วิธีประเมิน</th>
                      <th scope="col" width="350">การฝึกทักษะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        จัดเด็กอยู่ในท่ายืนโดยไม่ต้องช่วยพยุง
                        แล้วสังเกตว่าเด็กสามารถยืนอยู่ตามลำพังได้นาน 2 วินาที
                      </td>
                      <td>
                        1. ยิ้มและพูดคุยกับเด็กเมื่อทำกิจกรรมต่างๆ
                        ให้เด็กทุกครั้งพูดกระตุ้นให้เด็กทำตามเช่น
                        “ยิ้มให้คุณพ่อซิลูก” <br />

                        2. อุ้มเด็กไปหาคนที่คุ้นเคย เช่น พ่อ ปู่ ย่า ตา ยาย
                        และคน อื่น ๆ โดยยิ้มทักคนให้เด็กดู
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
              <div class="row">
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
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                    name="why1"
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
        2.จีบนิ้วมือเพื่อหยิบของชิ้นเล็ก (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="120">อุปกรณ์</th>
                    <th scope="col" width="250">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>วัตถุชิ้นเล็กขนาด 1 ซม.</td>
                    <td>
                      1. วางวัตถุชิ้นเล็กๆ ตรงหน้าเด็ก 1 ชิ้น<br />
                      2. กระตุ้นความสนใจของเด็กไปที่วัตถุชิ้นเล็ก
                      แล้วบอกให้เด็กหยิบหรือหยิบให้เด็กดู สังเกตการหยิบของเด็ก
                      <br />
                      <br /><font color="blue"
                        >ผ่าน :
                        เด็กสามารถจีบนิ้วโดยใช้นิ้วหัวแม่มือและนิ้วชี้หยิบวัตถุชิ้นเล็กขึ้น
                        มาได้ 1 ใน 3 ครั้ง
                      </font>
                    </td>
                    <td>
                      1. แบ่งขนมหรืออาหารเป็นชิ้นเล็กๆ ประมาณ 1 ซม.
                      ไว้ในจานแล้วหยิบอาหารหรือขนมโดยใช้นิ้วหัวแม่มือและนิ้วชี้หยิบให้เด็กดู
                      แล้วบอกให้เด็กทำตาม <br />

                      2. ถ้าเด็กทำไม่ได้ ช่วยเหลือเด็กโดยจับรวบนิ้วกลาง
                      นิ้วนางและนิ้วก้อยเข้าหาฝ่ามือ
                      เพื่อให้เด็กใช้นิ้วหัวแม่มือและนิ้วชี้หยิบวัตถุ <br />

                      3.
                      เล่นเกมที่เด็กต้องใช้นิ้วหัวแม่มือและนิ้วชี้แตะกันเป็นจังหวะ
                      หรือเล่นร้องเพลงแมงมุมขยุ้มหลังคาประกอบท่าทางจีบนิ้ว
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
                  <label class="form-check-label" for="flexRadioDefault1">
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
                  <label class="form-check-label" for="flexRadioDefault1">
                    ไม่ผ่าน
                  </label>

                  <input
                    type="text"
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                    name="why2"
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
        3.โบกมือหรือตบมือตามคำสั่ง (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="210">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      สบตาเด็กแล้วสั่งให้เด็กโบกมือหรือตบมือ
                      โดยห้ามใช้ท่าทางประกอบ

                      <br /><font color="blue"
                        >ผ่าน: เด็กสามารถทำาตามคำาสั่ง
                        แม้ไม่ถูกต้องแต่พยายามยกแขนและ เคลื่อนไหวมืออย่างน้อย 1
                        ใน 3 ครั้ง
                      </font>
                    </td>
                    <td>
                      1. เล่นกับเด็กโดยใช้คำสั่งง่าย ๆ เช่น โบกมือ
                      ตบมือพร้อมกับทำท่าทางประกอบ <br />

                      2. ถ้าเด็กไม่ทำให้จับมือทำและค่อยๆ
                      ลดความช่วยเหลือลงโดยเปลี่ยนเป็นจับข้อมือจากนั้นเปลี่ยนเป็นแตะข้อศอก
                      เมื่อเริ่มตบมือเองได้แล้ว
                      ลดการช่วยเหลือลงเป็นออกคำสั่งอย่างเดียว
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
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                    name="why3"
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
        4.แสดงความต้องการ โดยทำท่าทาง หรือเปล่งเสียง (EL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="200">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ถามผู้ปกครองว่า เมื่อเด็กต้องการสิ่งต่างๆ เด็กทำอย่างไร
                    </td>
                    <td>
                      นำของเล่นหรืออาหารที่เด็กชอบ 2-3 อย่าง
                      วางไว้ด้านหน้าเด็กถามเด็กว่า “หนูเอาอันไหน” หรือถามว่า
                      “หนูเอาไหม” รอให้ เด็กแสดงความต้องการก่อนจึงจะให้ของ
                      ทำทุกครั้งเมื่อต้องการให้ของเล่นหรืออาหารเด็ก
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
                  <label class="form-check-label" for="flexRadioDefault1">
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
                  <label class="form-check-label" for="flexRadioDefault1">
                    ไม่ผ่าน
                  </label>

                  <input
                    type="text"
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                    name="why4"
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
        5.เล่นสิ่งของตามประโยชน์ของ สิ่งของได้ (PS)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="260">อุปกรณ์</th>
                    <th scope="col" width="330">วิธีประเมิน</th>
                    <th scope="col" width="200">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1. หวี
                      <img
                        src="https://m.media-amazon.com/images/I/51Gx54wqQjL._SL1500_.jpg"
                        width="100"
                      />
                      2. แก้วน้ำ <img src=/img/แก้ว.png width="90"><br />
                      3. ช้อน
                      <img
                        src="https://www.kiddopacific.com/wp-content/uploads/catalog/product/SH210252366000SkipHipZootensilsForkSpoonCow.jpg"
                        width="80"
                      />
                      4. แปรงสีฟัน <img src=/img/แปรง.png width="80">
                    </td>
                    <td>
                      1. ยื่นของเล่นที่เตรียมไว้ให้เด็ก ครั้งละ 1 ชิ้น จนครบ 4
                      ชนิด <br />
                      2. สังเกตเด็กเล่นของเล่นทั้ง 4
                      ชนิดว่าตรงตามประโยชน์หรือไม่ หรือถามจากพ่อแม่ ผู้ปกครอง
                      <br />
                      <br /><font color="blue"
                        >ผ่าน : เด็กเล่นสิ่งของตามประโยชน์ได้ถูกต้องอย่างน้อย 1
                        ใน 4 ชิ้น
                      </font>
                    </td>
                    <td>
                      ฝึกร่วมกับการดำเนินชีวิตประจำวัน เช่น การหวีผม หวีผม
                      ตนเองให้เด็กดู แล้วจับมือเด็กหวีผมให้เด็ก
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
                    class="form-control"
                    placeholder="กรุณาระบุ"
                    aria-label="กรุณาระบุ"
                    aria-describedby="addon-wrapping"
                    name="why5"
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
</form> 
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
