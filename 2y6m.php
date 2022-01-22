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
      <!-- Example single danger button -->
      <div class="btn-group">
        <button
          type="button"
          class="btn btn-danger dropdown-toggle"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          2ปี 6เดือน
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
          <li><a class="dropdown-item" href="2y.php?HN=<?php echo $row["HN"];?>">2ปี</a></li>
        </ul>
      </div>
      <div class="col mt-3">
  <form action="2y6db.php" method="POST"> 
    <input type="hidden" name="HN" value="<?php echo $row["HN"];?>">
        <button
        id="h"
          type="button"
          class="btn"
          style="background-color: rgb(248, 250, 132)"
        >
          1.กระโดดข้ามเชือกบนพื้นไป ข้างหน้าได้ (GM)
        </button>

        <div class="row">
          <div class="col-sm-9">
            <div class="card-body">
              <div class="row">
                <table class="table table-bordered border-dark">
                  <thead>
                    <tr style="background-color: ">
                      <th scope="col" width="20">อุปกรณ์</th>
                      <th scope="col" width="280">วิธีประเมิน</th>
                      <th scope="col" width="450">การฝึกทักษะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        เชือก <br />
                        <img src=/img/เชือก.png width="150" >
                      </td>
                      <td>
                        1. วางเชือกเป็นเส้นตรงบนพื้นหน้าตัวเด็ก <br />
                        2. กระโดดข้ามเชือกที่วางอยู่บนพื้นให้เด็กดู
                        และบอกให้เด็กทำตาม
                      </td>
                      <td>
                        1. กระโดดอยู่กับที่ ให้เด็กดู <br />
                        2. จับมือเด็กไว้ทั้ง 2 ข้าง
                        แล้วฝึกกระโดดมาจากบันไดขั้นที่ติดกับพื้นหรือจากพื้นต่างระดับ
                        <br />
                        3. กระโดดข้ามเชือกให้เด็กดู <br />
                        4. ยืนหันหน้าเข้าหาเด็กโดยวางเชือกคั่นกลาง
                        และจับมือเด็กพยุงไว้ ดึงมือให้เด็กกระโดดข้ามเชือก
                        ฝึกบ่อย ๆ จนเด็กมั่นใจและสามารถ กระโดดข้ามเชือกได้เอง
                        <br />
                        5. พ่อแม่ ผู้ปกครองหรือผู้ดูแลเด็ก
                        ควรระมัดระวังไม่ให้เด็กมี อันตรายในระหว่างการกระโดด
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
        <div class="col-sm-9">
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
        2.ขว้างลูกบอลขนาดเล็กได้ โดย ยกมือขึ้นเหนือศีรษะ (GM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="100">อุปกรณ์</th>
                    <th scope="col" width="210">วิธีประเมิน</th>
                    <th scope="col" width="320">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ลูกบอลยาง วัดขนาด เส้นผ่านศูนย์กลางประมาณ 7 เซนติเมตร
                      <br />
                      <img
                        src="https://ae01.alicdn.com/kf/H3f474dd841ff45628a50e5488587fc4c3/20-Inflatable-Elastic.jpg_Q90.jpg_.webp width="
                        width="150"
                      />
                    </td>

                    <td>
                      ขว้างลูกบอลยางให้เด็กดู โดยจับลูกบอล
                      ด้วยมือข้างเดียวยกขึ้นเหนือศีรษะไปทาง ด้านหลัง
                      แล้วขว้างลูกบอลยางไปข้างหน้า และบอกให้เด็กทำตาม
                    </td>
                    <td>
                      1.
                      ขว้างลูกบอลให้เด็กดูโดยยกมือขึ้นเหนือศีรษะไปทางด้านหลังแล้ว
                      ขว้างลูกบอลไปข้างหน้า <br />
                      2. จัดเด็กยืนในท่าที่มั่นคง จับมือเด็กข้างที่ถนัดถือลูกบอล
                      แล้วยก ลูกบอลขึ้นเหนือศีรษะไปทางด้านหลัง
                      เอี้ยวตัวเล็กน้อยแล้วขว้าง ลูกบอลออกไป <br />
                      3. เมื่อเด็กเริ่มทำได้ ลดการช่วยเหลือลง
                      จนเด็กขว้างลูกบอลได้เอง <br />
                      4. เล่นขว้างลูกบอลกับเด็กบ่อย ๆ
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
        3.ต่อก้อนไม้สี่เหลี่ยมลูกบาศก์ เป็นหอสูงได้ 8 ก้อน (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="150">อุปกรณ์</th>
                    <th scope="col" width="250">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ก้อนไม้สี่เหลี่ยมลูกบาศก์ 8 ก้อน
                      <br />
                      <img src=/img/ก้อน8.png width="150">
                    </td>
                    <td>
                      1. จัดให้เด็กอยู่ในท่านั่งที่ถนัดที่จะต่อ ก้อนไม้ได้
                      <br />
                      2. วางก้อนไม้ 8 ก้อน ไว้ข้างหน้าเด็ก
                      กระตุ้นให้เด็กต่อก้อนไม้ให้สูงที่สุด หรือ
                      ทำให้เด็กดูก่อนได้ <br />
                      <br /><font color="blue"
                        >ผ่าน : เด็กสามารถต่อก้อนไม้ โดยไม่ล้ม <br />จำนวน 8
                        ก้อน 1 ใน 3 ครั้ง
                      </font>
                    </td>
                    <td>
                      1. ใช้วัตถุที่เป็นทรงสี่เหลี่ยม เช่น ก้อนไม้ กล่องสบู่
                      วางต่อกัน ในแนวตั้งให้เด็กดู <br />
                      2. กระตุ้นให้เด็กทำตาม <br />
                      3. ถ้าเด็กทำไม่ได้ให้จับมือเด็กวางก้อนไม้ก้อนที่ 1 ที่พื้น
                      และวางก้อนที่ 2 บนก้อนที่ 1 วางไปเรื่อยๆ จนครบ 8 ชั้น
                      <br />
                      4. ทำซ้ำหลายครั้งและลดการช่วยเหลือลง
                      จนเด็กต่อก้อนไม้ได้เอง หากเด็กทำได้แล้วให้ชมเชย
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
        4.ยื่นวัตถุให้ผู้ทดสอบได้ 1 ชิ้น ตามคำบอก (รู้จำนวนเท่ากับ 1) (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="100">อุปกรณ์</th>
                    <th scope="col" width="250">วิธีประเมิน</th>
                    <th scope="col" width="290">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ก้อนไม้สี่เหลี่ยมลูกบาศก์ 3 ก้อน
                      <br />
                      <img src=/img/ก้อน3.png width="150">
                    </td>
                    <td>
                      1. วางก้อนไม้สี่เหลี่ยมลูกบาศก์ 3 ก้อน ตรงหน้าเด็ก <br />
                      2. แบมือไปตรงหน้าเด็กแล้วพูดว่า “หยิบ ก้อนไม้ให้ครู 1
                      ก้อน” <br />
                      3. นำก้อนไม้กลับไปวางที่เดิม แล้วพูด ซ้ำว่า “หยิบก้อนไม้
                      ให้ครู 1 ก้อน”

                      <br /><font color="blue"
                        >ผ่าน : เด็กสามารถส่งวัตถุให้ผู้ประเมิน 1 ก้อน ได้ทั้ง 2
                        ครั้ง โดยไม่พยายามจะหยิบส่งให้อีก
                      </font>
                    </td>
                    <td>
                      1. วางวัตถุชนิดเดียวกัน 3 ชิ้นตรงหน้าเด็ก เช่น ช้อน 3 คัน
                      และ พูดว่า “หยิบช้อนให้คุณพ่อ/คุณแม่ 1 คัน” <br />
                      2. ถ้าเด็กหยิบให้เกิน 1 คัน ให้พูดว่า “พอแล้ว”
                      หรือจับมือเด็กไว้ เพื่อไม่ให้ส่งเพิ่ม <br />
                      3. เปลี่ยนวัตถุให้หลากหลายขึ้น เช่น ใบไม้ ดอกไม้ ผลไม้ และ
                      ควรสอนอย่างสม่ำเสมอ ในสถานการณ์อื่น ๆ ด้วย
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
                    value="ไม่ผ่าน"
                    id="flexRadioDefault1"
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
        5.สนใจฟังนิทานได้นาน 5 นาที (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="210">อุปกรณ์</th>
                    <th scope="col" width="270">วิธีประเมิน</th>
                    <th scope="col" width="290">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      หนังสือนิทานสำหรับเด็กที่มีรูปภาพและ
                      คำอธิบายประกอบหน้าละประมาณ 20 - 30 คำ และอ่านจบใน 5 นาที

                      <br />
                      <img
                        src="https://th-test-11.slatic.net/p/a796412671bbd3c59ff4f9884e4304f7.jpg"
                        width="100"
                      />
                    </td>
                    <td>
                      ชวนเด็กมองที่หนังสือแล้วอ่านหรือ เล่านิทานให้เด็กฟัง หรือ
                      สอบถามจาก ผู้ปกครองว่าเด็กสามารถสนใจฟังนิทาน ได้นานถึง 5
                      นาที หรือไม่
                    </td>
                    <td>
                      1. อ่านนิทานสั้น ๆ ให้เด็กฟังทุกวันด้วยน้ำเสียงทีสนุกสนาน
                      <br />
                      2. ให้เด็กดูรูปภาพ และแต่งเรื่องเล่าจาก
                      รูปภาพเพื่อให้เด็กสนใจ เช่น “กระต่ายน้อยมีขนสีขาวมีหูยาว ๆ
                      กระโดดได้ไกล และวิ่งได้เร็ว” <br />
                      3. ในระยะแรกใช้นิทานสั้น ๆ ที่ใช้เวลา 2 - 3 นาที
                      ต่อเรื่องก่อน ต่อไป
                      จึงเพิ่มความยาวของนิทานให้มากขึ้นจนใช้เวลาประมาณ 5 นาที
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
        type="button"
        class="btn"
        style="background-color: rgb(248, 250, 132)"
      >
        6.วางวัตถุไว้ “ข้างบน” และ “ข้างใต้” ตามคำสั่งได้ (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="180">อุปกรณ์</th>
                    <th scope="col" width="270">วิธีประเมิน</th>
                    <th scope="col" width="290">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ก้อนไม้สี่เหลี่ยมลูกบาศก์ 1 ก้อน <br />

                      <img src=/img/ก้อน1.png width="120">
                    </td>

                    <td>
                      ส่งก้อนไม้ให้เด็กแล้วพูดว่า
                      “วางก้อนไม้ไว้ข้างบน...(เก้าอี้/โต๊ะ)”“วางก้อนไม้ไว้ข้างใต้....(เก้าอี้/โต๊ะ)”
                      บอก 3 ครั้ง โดยสลับคำบอก ข้างบน/ข้างใต้ ทุกครั้ง <br />
                      <br /><font color="blue"
                        >ผ่าน : เด็กสามารถวางก้อนไม้ไว้ข้างบน
                        และข้างใต้ได้ถูกต้อง 2 ใน 3 ครั้ง
                      </font>
                    </td>
                    <td>
                      1. วางของเล่น เช่น บอล ไว้ที่ตำแหน่ง “ข้างบน”
                      แล้วบอกเด็กว่า “บอลอยู่ข้างบนโต๊ะ”<br />
                      2. บอกให้เด็ก
                      หยิบของเล่นอีกชิ้นหนึ่งมาวางไว้ข้างบนโต๊ะถ้าเด็กทำ ไม่ได้
                      ให้จับมือเด็กทำ <br />
                      3. ทำซ้ำโดยเปลี่ยนเป็นตำแหน่ง “ข้างใต้” <br />
                      4. ฝึกเพิ่มตำแหน่ง อื่น ๆ เช่น ข้าง ๆ ข้างใน ข้างนอก
                      ข้างหน้า ข้างหลัง
                      (ใช้คำที่สื่อสารในภาษาตามท้องถิ่นในบริบทที่เด็กพูดใน
                      ครอบครัว)
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
                    name="flexRadioDefault6"
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
                    name="flexRadioDefault6"
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
                    name="why6"
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
        7.พูดติดต่อกัน 2 คำขึ้นไปอย่าง มีความหมายโดยใช้คำกริยาได้
        ถูกต้องอย่างน้อย 4 กริยา (EL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color:">
                    <th scope="col" width="150">อุปกรณ์</th>
                    <th scope="col" width="250">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ตุ๊กตาผ้า
                      <img
                        src="https://dw.lnwfile.com/6hs51j.png"
                        width="150"
                      />
                    </td>

                    <td>
                      จับตุ๊กตาทำกริยาต่างๆ เช่น นั่ง เดิน นอน วิ่ง
                      แล้วถามเด็กว่า ตุ๊กตาทำะไร หรือ
                      สังเกตขณะประเมินทักษะข้ออื่น
                    </td>
                    <td>
                      ฝึกให้เด็กพูดตามสถานการณ์จริง เช่น ขณะรับประทานอาหารถาม
                      เด็กว่า “หนูกำลังทำอะไร” รอให้เด็กตอบ “กินข้าว” หรือ
                      ขณะอ่าน หนังสือ ถามเกี่ยวกับรูปภาพในหนังสือ เช่น
                      ชี้ไปที่รูปแมว แล้วถาม ว่า “แมว ทำอะไร” รอให้เด็กตอบ เช่น
                      “แมววิ่ง” ถ้าเด็กตอบไม่ได้ ให้ช่วยตอบนำ และถามซ้ำ
                      เพื่อให้เด็กตอบเองฝึกในสถานการณ์อื่น ๆ โดยเด็กต้องใช้วลี 2
                      คำขึ้นไป ที่ใช้คำกริยาได้ถูกต้อง เช่น ให้ตอบจาก
                      บัตรภาพคำกริยา ได้แก่ อาบน้ำ ล้างหน้า แปรงฟัน เป็นต้น
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
                    name="flexRadioDefault7"
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
                    name="flexRadioDefault7"
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
                    name="why7"
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
        8.ร้องเพลงได้บางคำหรือร้อง เพลงคลอตามทำนอง (PS)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="270">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1. ให้พ่อแม่ ผู้ปกครองหรือผู้ดูแลเด็ก
                      ชวนเด็กร้องเพลงที่เด็กคุ้นเคย <br />
                      2. ถ้าเด็กไม่ยอมร้องเพลง ให้ถามจาก พ่อแม่
                      ผู้ปกครองว่าเด็กสามารถร้องเพลง
                      บางคำหรือพูดคำคล้องจองได้หรือไม่
                    </td>
                    <td>
                      1. ร้องเพลงง่าย ๆ ให้เด็กฟัง เช่น เพลงช้าง เพลงเป็ด
                      โดยออกเสียง และทำนองที่ชัดเจน แล้วชวนให้เด็กร้องตาม
                      พร้อมทั้งทำท่าทาง ประกอบ <br />
                      2. ร้องเพลงเดิมซ้ำบ่อย ๆ เพื่อให้เด็กคุ้นเคย จำได้
                      และกระตุ้นให้ เด็กร้องตาม
                      หรือเว้นเพื่อให้เด็กร้องต่อเป็นช่วงๆ <br />
                      3. เมื่อเด็กเริ่มร้องเพลงเองได้ ให้พ่อแม่
                      ผู้ปกครองหรือผู้ดูแลเด็ก ร้องตามเด็ก
                      เลือกเปิดเพลงที่มีเนื้อหาเหมาะสมกับเด็ก และพ่อแม่
                      ผู้ปกครองหรือผู้ดูแลเด็ก ร้องเพลงต่าง ๆ
                      ร่วมกับเด็กพร้อมทั้งทำท่า ประกอบ เช่น เพลงช้าง เพลงเป็ด
                      หรือเป็นเพลงเด็กภาษาอังกฤษด้วย
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
                    name="flexRadioDefault8"
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
                    name="flexRadioDefault8"
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
                    name="why8"
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
        9.เด็กรู้จักรอให้ถึงรอบของ ตนเองในการเล่นโดยมีผู้ใหญ่คอยบอก (PS)
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
                    <td>
                      1. ก้อนไม้ 4 ก้อน <br /><img src=/img/ก้อนไม้.png
                      width="100"><br />
                      2. ถ้วยสำหรับใส่ก้อนไม้ 1 ใบ <img src=/img/ถ้วย.png
                      width="150">
                    </td>

                    <td>
                      1. ถือก้อนไม้ 2 ก้อน และยื่นก้อนไม้ ให้เด็ก 2 ก้อน <br />
                      2. วางถ้วยตรงหน้าเด็กและพูดว่า “เรามา ใส่ก้อนไม้คนละ 1
                      ก้อน ให้ถือก้อนไม้ ไว้ก่อน ให้ครูใส่ก่อน แล้วหนูค่อยใส่”
                      <br />
                      3. สังเกตการรอให้ถึงรอบของเด็ก
                    </td>
                    <td>
                      1. ผลัดกันเล่นกับเด็ก จนเด็กคุ้นเคยก่อน <br />
                      2. ฝึกให้เด็กเล่นเป็นกลุ่มด้วยกันโดยมีพ่อแม่
                      ผู้ปกครองหรือผู้ดูแล เด็ก บอกเด็ก เช่น
                      “..(ชื่อเด็ก)..เอาห่วงใส่หลัก” “แล้วรอก่อนนะ” <br />
                      3. พ่อแม่ ผู้ปกครองหรือผู้ดูแลเด็ก
                      บอกให้เด็กคนต่อไปเอาห่วง ใส่หลัก ถ้าเด็กรอไม่ได้
                      ให้เตือนทุกครั้งจนเด็กรอได้เอง <br />
                      4. ฝึกเล่นกิจกรรมอย่างอื่น เช่น
                      ร้องเพลง/นับเลขพร้อมกันก่อนแล้ว ค่อยกินขนม
                      หรือในสถานการณ์อย่างอื่นที่ต้องมีการรอให้ถึงรอบของ
                      ตนเองกับเด็ก เช่น พ่อแม่ ผู้ปกครองหรือผู้ดูแลเด็ก
                      เข้าแถวรอจ่าย เงินเวลาซื้อของ
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
                    name="flexRadioDefault9"
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
                    name="flexRadioDefault9"
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
                    name="why9"
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
