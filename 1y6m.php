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
          1ปี 6เดือน
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

          <li><a class="dropdown-item" href="2y.php?HN=<?php echo $row["HN"];?>">2ปี</a></li>
          <li>
            <a class="dropdown-item" href="2y6m.php?HN=<?php echo $row["HN"];?>">2ปี 6เดือน</a>
          </li>
        </ul>
      </div>

      <div class="col mt-3">
      <form action="1y6db.php" method="POST"> 
      <input type="hidden" name="HN" value="<?php echo $row["HN"];?>">
        <button
        id="h"
          type="button"
          class="btn"
          style="background-color: rgb(248, 250, 132)"
        >
          1.วิ่งได้ (GM)
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
                      <th scope="col" width="350">การฝึกทักษะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        ลูกบอลเส้นผ่านศูนย์กลาง 15 - 20 เซนติเมตร
                        <br />
                        <img src=/img/บอล.png width="100">
                      </td>

                      <td>
                        วิ่งเล่นกับเด็ก
                        หรืออาจกลิ้งลูกบอลแล้วกระตุ้นให้เด็กวิ่งตามลูกบอล
                      </td>
                      <td>
                        1. จับมือเด็กวิ่งเล่น หรือร่วมวิ่งกับเด็กคนอื่น ๆ
                        เพื่อให้เด็กสนุกสนาน<br />
                        2. ลดการช่วยเหลือลง
                        เมื่อเด็กมั่นใจและเริ่มวิ่งได้ดีขึ้นจนเด็กสามารถวิ่งได้เอง
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
        2.เดินถือลูกบอลไปได้ไกล 3 เมตร (GM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="100">อุปกรณ์</th>
                    <th scope="col" width="200">วิธีประเมิน</th>
                    <th scope="col" width="290">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ลูกบอลเส้นผ่านศูนย์กลาง 15 - 20 เซนติเมตร
                      <br />
                      <img src=/img/บอล.png width="100">
                    </td>
                    <td>
                      1. จัดให้เด็กและพ่อแม่
                      ผู้ปกครองหรือผู้ดูแลเด็กยืนหันหน้าเข้าหากันระยะห่าง 3 เมตร
                      <br />

                      2. ส่งลูกบอลให้เด็กถือ และบอกให้เด็กเดินไปหาพ่อแม่
                      ผู้ปกครองหรือผู้ดูแลเด็ก
                    </td>
                    <td>
                      1. ฝึกให้เด็กเดินโดยถือของมือเดียว <br />
                      2. เมื่อเด็กทำได้แล้วให้พ่อแม่ ผู้ปกครอง หรือผู้ดูแลเด็ก
                      วางตะกร้าไว้ในระยะห่าง 3 เมตร
                      แล้วถือของที่มีขนาดใหญ่ขึ้นด้วยสองมือ
                      และเดินเอาของไปใส่ตะกร้าให้เด็กดู แล้วบอกให้เด็กทำตาม
                      <br />
                      3. ถ้าเด็กทำไม่ได้ ให้ขยับตะกร้าให้ใกล้ขึ้น
                      และจับมือเด็กถือของ ช่วยพยุงหากเด็กยังทรงตัวได้ไม่ดี
                      <br />
                      4.
                      เมื่อเด็กทรงตัวได้ดีและถือของได้ด้วยตนเองให้เพิ่มระยะทาง
                      จนถึง 3 เมตร
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
        3.เปิดหน้าหนังสือที่ทำด้วยกระดาษแข็งทีละแผ่นได้เอง (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="160">อุปกรณ์</th>
                    <th scope="col" width="210">วิธีประเมิน</th>
                    <th scope="col" width="290">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      หนังสือรูปภาพทำด้วยกระดาษแข็ง

                      <br />
                      <img src=/img/หนังสือ.jpg width="120">
                    </td>

                    <td>
                      วางหนังสือไว้ตรงหน้าเด็ก แสดงวิธีการเปิดหนังสือให้เด็กดู
                      และบอกให้เด็กทำตาม

                      <br /><br /><font color="blue"
                        >ผ่าน : เด็กสามารถแยกหน้าและพลิกหน้า
                        หนังสือได้ทีละแผ่นด้วยตนเอง อย่างน้อย 1 แผ่น
                      </font>
                    </td>
                    <td>
                      1.
                      เปิดหน้าหนังสือทีละหน้าแล้วชี้ให้เด็กดูรูปภาพและปิดหนังสือ
                      <br />
                      2. บอกให้เด็กทำตาม <br />
                      3. ถ้าเด็กทำไม่ได้ให้ช่วยจับมือเด็กพลิกหน้าหนังสือทีละหน้า
                      <br />
                      4. เล่านิทานประกอบรูปภาพ เพื่อเสริมสร้างจินตนาการของเด็ก
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
        4. ต่อก้อนไม้ 2 ชั้น (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="50">อุปกรณ์</th>
                    <th scope="col" width="290">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ก้อนไม้สี่เหลี่ยมลูกบาศก์ <br />4 ก้อน

                      <br />
                      <img src=/img/ก้อนไม้.png width="130">
                    </td>

                    <td>
                      1. วางก้อนไม้ 4 ก้อน ตรงหน้าเด็ก <br />
                      2. ต่อก้อนไม้ 2 ชั้นให้เด็กดูแล้วรื้อแบบออก <br />

                      3. กระตุ้นให้เด็กต่อก้อนไม้เองให้โอกาสประเมิน 3 ครั้ง
                      <br />
                      <br /><font color="blue"
                        >ผ่าน : เด็กสามารถต่อก้อนไม้โดยไม่ล้ม 2 ใน 3 ครั้ง</font
                      >
                    </td>
                    <td>
                      1. ใช้วัตถุที่เป็นทรงสี่เหลี่ยม เช่น ก้อนไม้ กล่องสบู่
                      วางต่อกันในแนวตั้งให้เด็กดู<br />

                      2. กระตุ้นให้เด็กทำตาม<br />
                      3. ถ้าเด็กทำไม่ได้ให้จับมือเด็กวางก้อนไม้ก้อนที่ 1 ที่พื้น
                      และวางก้อนที่ 2 บนก้อนที่ 1 <br />

                      4. ทำซ้ำหลายครั้งและลดการช่วยเหลือลง
                      จนเด็กต่อก้อนไม้ได้เองหากเด็กทำได้แล้วให้ชมเชย
                      หากเด็กต่อได้ 2 ชั้น แล้วให้เปลี่ยนเป็น ต่อมากกว่า 2 ชั้น
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
        5.เลือกวัตถุตามคำสั่งได้ถูกต้อง 3 ชนิด (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="150">อุปกรณ์</th>
                    <th scope="col" width="260">วิธีประเมิน</th>
                    <th scope="col" width="330">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1. ตุ๊กตาผ้า
                      <img
                        src="https://inwfile.com/s-cj/ad3601.jpg"
                        width="120"
                      />
                      <br />

                      2. รถ <img src=/img/รถ.png width="100"><br />
                      3. บอล <img src=/img/บอล.png width="80"><br />
                    </td>

                    <td>
                      วางวัตถุ 3 ชนิดไว้ตรงหน้าเด็กแล้วถามว่า “อยู่ไหน”
                      จนครบทั้ง 3 ชนิด แล้วจึงสลับ ตำแหน่งที่วางวัตถุ
                      ให้โอกาสประเมิน 3 ครั้ง <br />
                      <br /><font color="blue">
                        ผ่าน : เด็กสามารถชี้หรือหยิบวัตถุได้ถูกต้องทั้ง 3 ชนิด
                        อย่างน้อย 2 ครั้ง
                      </font>
                    </td>
                    <td>
                      1. เตรียมของเล่นหรือวัตถุที่เด็กคุ้นเคย 2 ชนิด
                      และบอกให้เด็กรู้จักชื่อวัตถุทีละชนิด
                      <br />
                      2. ถามเด็ก “อยู่ไหน” โดยให้เด็กชี้หรือหยิบ
                      ถ้าเด็กเลือกไม่ถูกต้อง ให้เลื่อนของเข้าไปใกล้
                      และจับมือเด็กชี้หรือหยิบ <br />
                      3. เมื่อเด็กสามารถเลือกได้ถูกต้อง
                      เพิ่มของเล่นหรือวัตถุที่เด็ก คุ้นเคย เป็น 3 ชนิด
                      และถามเช่นเดิมจนเด็กชี้หรือหยิบได้ถูกต้อง ทั้ง 3 ชนิด
                      <br />
                      4. เพิ่มวัตถุชนิดอื่นที่เด็กสนใจชี้ให้เด็กดู
                      แล้วพูดให้เด็กชี้ เพื่อเพิ่ม การเรียนรู้ภาษาของเด็ก
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
        6.ชี้อวัยวะได้ 1 ส่วน (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="250">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1. ถามพ่อแม่ ผู้ปกครองหรือผู้ดูแลเด็ก ก่อนว่า
                      เด็กรู้จักอวัยวะของร่างกาย ส่วนไหนบ้าง <br />
                      2. ถามเด็กว่า “…อยู่ไหน” โดยถาม เหมือนเดิม 3 ครั้ง
                      <br /><font color="blue"
                        >ผ่าน : เด็กสามารถชี้อวัยวะ ได้ถูกต้อง 2 ใน 3 ครั้ง
                      </font>
                    </td>
                    <td>
                      1. เริ่มฝึกจากการชี้อวัยวะของพ่อแม่ ผู้ปกครอง
                      หรือผู้ดูแลเด็ก ให้เด็กดู <br />
                      2. หลังจากนั้นชี้ชวนให้เด็กทำตาม
                      โดยชี้อวัยวะของตัวเองทีละส่วน <br />
                      3. ถ้าเด็กชี้ไม่ได้ให้จับมือเด็กชี้ให้ถูกต้อง
                      และลดการช่วยเหลือลงจนเด็กสามารถชี้ได้เอง
                      โดยอาจใช้เพลงเข้ามาประกอบในการทำกิจกรรม
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
        7.พูดเลียนคำที่เด่น หรือคำสุดท้ายของคำพูด (EL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="160">วิธีประเมิน</th>
                    <th scope="col" width="500">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      พูดคุยกับเด็กเป็นประโยคหรือวลีสั้นๆ ไม่เกิน 3 คำ
                      แล้วสังเกตการโต้ตอบของเด็ก
                    </td>
                    <td>
                      1. พูดกับเด็กก่อนแล้วค่อยทำกริยานั้นให้เด็กดู เช่น
                      เมื่อแต่งตัวเสร็จ พูดว่า “ไปกินข้าว” แล้วออกเสียง “กิน”
                      หรือ “ข้าว” ให้เด็กฟัง แล้วจึงพาไป <br />
                      2. สอนให้เด็กพูดตามความจริง เช่น <br />
                      - ขณะแต่งตัว เมื่อเด็กให้ความร่วมมือดี ให้ชมเชยว่า
                      “หนูเป็นเด็กดี” เพื่อให้เด็กเลียนคำ “เด็ก” หรือ “ดี” ได้
                      <br />
                      - เมื่อแต่งตัวเสร็จ พูดว่า “ไปกินข้าว” รอให้เด็กออกเสียง
                      “กิน” หรือ “ข้าว” ก่อนแล้วจึงพาไป <br />
                      3. ถ้าเด็กไม่ออกเสียงพูดตาม ให้ซ้ำคำเด่นหรือคำสุดท้ายนั้น
                      จนเด็ก สามารถเลียนคำพูดสุดท้ายนั้นได้ <br />
                      4. เมื่อเด็กพูดได้แล้ว
                      ให้ความสนใจและพูดโต้ตอบกับเด็กโดยเปลี่ยน ใช้คำอื่นๆ
                      ตามสถานการณ์ต่างๆ
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
        8.พูดเป็นคำๆ ได้ 4 คำ เรียกชื่อสิ่งของหรือทักทาย (ต้องเป็น
        คำอื่นที่ไม่ใช่คำว่าพ่อแม่ ชื่อของคนคุ้นเคย หรือชื่อของ
        สัตว์เลี้ยงในบ้าน) (EL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="280">วิธีประเมิน</th>
                    <th scope="col" width="650">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ถามพ่อแม่ ผู้ปกครองหรือผู้ดูแลเด็กว่า เด็กพูดเป็นคำๆ
                      หรือรู้จักชื่อสิ่งของอะไรบ้าง
                    </td>
                    <td>
                      สอนให้เด็กพูดคำสั้น ๆ ตามเหตุการณ์จริง เช่น <br />
                      - เมื่อพบหน้าผู้ใหญ่ให้พูดทักทายคำว่า
                      “สวัสดีค่ะ/ครับ”หรือใช้คำ ที่ทักทายในท้องถิ่น เช่น ธุจ้า
                      ทุกครั้ง <br />
                      - ขณะรับประทานอาหาร ก่อนป้อนข้าวพูด “ข้าว” ให้ เด็กพูดตาม
                      “ข้าว” <br />
                      - ขณะกำลังดูหนังสือฝึกให้เด็กพูดคำต่าง ๆ ตามรูปภาพ เช่น
                      “ปลา” “โต๊ะ” “แมว”
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
        9.สนใจและมองตามสิ่งที่ผู้ใหญ่ชี้ที่อยู่ไกลออกไปประมาณ 3 เมตร (PS)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="550">วิธีประเมิน</th>
                    <th scope="col" width="540">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ชี้สิ่งที่อยู่ไกลประมาณ 3 เมตร เช่นหลอดไฟ นาฬิกา
                      แล้วพูดชื่อสิ่งของเช่น “โน่นหลอดไฟ” “โน่นนาฬิกา”
                      แล้วสังเกตว่าเด็กมองตามได้หรือไม่
                    </td>
                    <td>
                      ชี้สิ่งที่อยู่ใกล้ตัวให้เด็กมองตาม
                      หากเด็กยังไม่มองให้ประคองหน้าเด็กให้หันมองตาม
                      แล้วค่อยชี้ของที่อยู่ไกลออกไป จนถึง 3 เมตร
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
        type="button"
        class="btn"
        style="background-color: rgb(248, 250, 132)"
      >
        10.ดื่มน้ำจากถ้วยโดยไม่หก (PS)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="150">อุปกรณ์</th>
                    <th scope="col" width="300">วิธีประเมิน</th>
                    <th scope="col" width="350">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ถ้วยฝึกดื่มมีหูใส่น้ำ 1/4 ถ้วย

                      <br />
                      <img src=/img/แก้ว.png width="150">
                    </td>
                    <td>
                      ส่งถ้วยที่มีน้ำ 1/4 ของถ้วยให้เด็กแล้วบอก เด็กให้ดื่มน้ำ
                      สังเกตการดื่มของเด็ก หรือ ถามพ่อแม่
                      ผู้ปกครองหรือผู้ดูแลเด็ก ว่า
                      “เด็กสามารถยกถ้วยหรือขันน้ำขึ้นดื่มโดย ไม่หกได้หรือไม่”
                    </td>
                    <td>
                      1. ประคองมือเด็กให้ยกแก้วน้ำขึ้นดื่ม ค่อยๆ ลดการช่วยเหลือ
                      จนเด็กสามารถถือแก้วน้ำยกขึ้นดื่มโดยไม่หก <br />
                      2. ฝึกเด็กดื่มนมและน้ำจากแก้ว (เลิกใช้ขวดนม)
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
                    name="flexRadioDefault10"
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
                    name="flexRadioDefault10"
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
                    name="why10"
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
