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
          2ปี
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

          <li><a class="dropdown-item" href="1y.php?HN=<?php echo $row["HN"];?>">1ปี</a></li>
          <li>
            <a class="dropdown-item" href="1y6m.php?HN=<?php echo $row["HN"];?>">1ปี 6เดือน</a>
          </li>

          <li>
            <a class="dropdown-item" href="2y6m.php?HN=<?php echo $row["HN"];?>">2ปี 6เดือน</a>
          </li>
        </ul>
      </div>
      <div class="col mt-3">
      <form action="2ydb.php" method="POST"> 
      <input type="hidden" name="HN" value="<?php echo $row["HN"];?>">
        <button
        id="h"
          type="button"
          class="btn"
          style="background-color: rgb(248, 250, 132)"
        >
          1.เด็กเหวี่ยงขาเตะลูกบอลได้ (GM)
        </button>

        <div class="row">
          <div class="col-sm-9">
            <div class="card-body">
              <div class="row">
                <table class="table table-bordered border-dark">
                  <thead>
                    <tr style="background-color: ">
                      <th scope="col" width="200">อุปกรณ์</th>
                      <th scope="col" width="220">วิธีประเมิน</th>
                      <th scope="col" width="300">การฝึกทักษะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        ลูกบอลขนาดเส้นผ่าศูนย์กลาง 15 ซม.

                        <br />
                        <img
                          src="https://image.makewebeasy.net/makeweb/0/RkWxkNYkh/Football3/KISEKI_Ranboll_3.png"
                          width="100"
                        />
                      </td>

                      <td>
                        เตะลูกบอลให้เด็กดูและบอกให้เด็กทำตาม <br />
                        <br /><font color="blue"
                          >ผ่าน :
                          เด็กเหวี่ยงขาเตะลูกบอลขนาดเส้นผ่าศูนย์กลางประมาณ 15
                          ซม. ได้โดยไม่เสียการทรงตัวและทำได้อย่างน้อย 3 ใน 5
                          ครั้ง
                        </font>
                      </td>
                      <td>
                        ให้เด็กยืนใช้มือข้างหนึ่งจับราว หรือพนักเก้าอี้
                        หรือเกาะฝาผนัง วางลูกบอลให้ห่างจากเท้าเด็กเล็กน้อย
                        บอกให้เด็กเตะบอล ออกไป
                        พร้อมกับช่วยจับไหล่ข้างที่เกาะราวไว้เพื่อให้เด็กทิ้ง
                        น้ำหนักลงบนขาข้างนั้นแล้วเหวี่ยงเท้าอีกข้างเตะบอล
                        เมื่อเด็ก ทำได้ดีให้ลดการช่วยเหลือลง
                        จนเด็กสามารถทำได้เอง
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
        2.ต่อก้อนไม้ 4 ชั้น (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="170">อุปกรณ์</th>
                    <th scope="col" width="260">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ก้อนไม้สี่เหลี่ยมลูกบาศก์ 4 ก้อน

                      <br />
                      <img src=/img/ก้อนไม้.png width="100">
                    </td>
                    <td>
                      วางก้อนไม้ 4 ก้อน ไว้ข้างหน้าเด็กกระตุ้นให้เด็กต่อก้อนไม้
                      เป็นหอสูง อาจทำให้ดูก่อนได้ ให้เด็กทำ 3 ครั้ง <br />
                      <br /><font color="blue"
                        >ผ่าน : เด็กต่อก้อนไม้ 4 ก้อน โดยไม่ล้มได้ทั้ง 3 ครั้ง
                      </font>
                    </td>
                    <td>
                      1. วางก้อนไม้ซ้อนกันเป็นหอสูงให้เด็กดูแล้วรื้อแบบออก
                      <br />
                      2. จับมือเด็กต่อก้อนไม้ให้วางซ้อนกัน โดยค่อย ๆ วางให้ตรง
                      จนครบ 4 ก้อน <br />
                      3. วางก้อนไม้ตรงหน้าเด็ก 1 ก้อน
                      แล้วยื่นก้อนไม้ให้เด็กทีละก้อน
                      เพื่อให้เด็กต่อก้อนไม้ขึ้นเองทีละก้อนจนครบ 4 ก้อน
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
        3.เลือกวัตถุตามคำสั่ง (ตัวเลือก 4 ชนิด) (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="160">อุปกรณ์</th>
                    <th scope="col" width="280">วิธีประเมิน</th>
                    <th scope="col" width="310">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ของเล่นเด็ก เช่น ตุ๊กตาผ้า บอล รถ ถ้วย

                      <br />
                      <img
                        src="https://image.makewebeasy.net/makeweb/0/RkWxkNYkh/Football3/KISEKI_Ranboll_3.png"
                        width="100"
                      />
                      <img src=/img/รถ.png width="100">
                    </td>

                    <td>
                      1. วางของเล่นทั้ง 4 ชิ้นไว้ตรงหน้าเด็กในระยะที่เด็กหยิบถึง
                      2. ถามเด็กทีละชนิดว่า “อันไหนตุ๊กตา” “อันไหนบอล”
                      “อันไหนรถ” “อันไหนถ้วย” ถ้าเด็กหยิบของเล่นออกมา
                      ให้ผู้ประเมินนำของเล่นกลับไปวางที่เดิมแล้วจึงถามชนิด ต่อไป
                      จนครบ 4 ชนิด <br />
                      <br /><font color="blue"
                        >ผ่าน: เด็กสามารถหยิบ/ชี้ของเล่นได้ถูกต้องทั้ง 4 ชนิด
                      </font>
                    </td>
                    <td>
                      1. วางของเล่นที่เด็กคุ้นเคย 2 ชิ้น กระตุ้นให้เด็กมอง
                      แล้วบอกชื่อของเล่นทีละชิ้น
                      <br />
                      2. บอกให้เด็กหยิบของเล่นทีละชิ้น
                      ถ้าเด็กหยิบไม่ถูกให้จับมือเด็กหยิบ
                      พร้อมกับพูดชื่อของเล่นนั้นซ้ำ <br />
                      3. ฝึกจนเด็กสามารถทำตามคำสั่งได้ถูกต้องและเพิ่มของเล่น
                      ทีละชิ้นจนครบทั้ง 4 ชิ้น <br />
                      4. เมื่อทำได้แล้วให้ฝึกกับวัตถุหลากหลายมากขึ้น เช่น
                      เครื่อง ดนตรี หนังสือนิทาน
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
        4. เลียนคำพูดที่เป็นวลีประกอบด้วยคำ 2 คำขึ้นไป (EL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="100">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      พูดวลี 2 คำกับเด็ก และให้เด็กเลียนคำพูดตาม เช่น รถพ่อ
                      เสื้อหนู
                    </td>
                    <td>
                      เมื่อเด็กพูดคำเดี่ยวได้แล้ว ให้ขยายคำพูดของเด็ก เป็น 2 คำ
                      เช่น เด็กพูด “ไป” พ่อแม่ ผู้ปกครองพูดว่า “ไปนอน”
                      “ไปเที่ยว” แล้วให้เด็กพูดตาม และพูดคำ 2 คำ ให้เด็กฟัง บ่อย
                      ๆ เช่น แม่ไป แมวเหมียว ไม่เอา เป็นต้น
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
        5.ใช้ช้อนตักอาหารกินเองได้ (PS)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color:">
                    <th scope="col" width="250">วิธีประเมิน</th>
                    <th scope="col" width="250">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ถามจากพ่อแม่ ผู้ปกครองว่า “เด็กสามารถใช้ช้อนกินอาหาร
                      ได้หรือไม่”
                    </td>
                    <td>
                      1. จับมือเด็กใช้ช้อนตักอาหารแต่พอคำและรับประทาน <br />
                      2. เมื่อเด็กเริ่มทำได้
                      ปล่อยให้เด็กตักอาหารใส่ปากด้วยตัวเอง <br />
                      3. ถ้าเด็กทำหกบ้างโดยไม่ตั้งใจ ควรทำสีหน้าเฉยไม่แสดง
                      ความสนใจ
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
