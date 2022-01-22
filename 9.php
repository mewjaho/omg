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
    <button
          type="button"
          class="btn btn-danger dropdown-toggle"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          9เดือน
        </button>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="พัฒนา.php?HN=<?php echo $row["HN"];?>">2เดือน</a>
          </li>
          <li><a class="dropdown-item" href="4m.php?HN=<?php echo $row["HN"];?>">4เดือน</a></li>
          <li><a class="dropdown-item" href="6.php?HN=<?php echo $row["HN"];?>">6เดือน</a></li>
           <li><a class="dropdown-item" href="1y.php?HN=<?php echo $row["HN"];?>">1ปี</a></li>
          <li>
            <a class="dropdown-item" href="1y6m.php?HN=<?php echo $row["HN"];?>">1ปี 6เดือน</a>
          </li>
          <li><a class="dropdown-item" href="2y.php?HN=<?php echo $row["HN"];?>">2ปี</a></li>
        </ul>
      </div>

      <div class="col mt-3">
      <form action="9mdb.php" method="POST"> 
      <input type="hidden" name="HN" value="<?php echo $row["HN"];?>">
        <button
        id="h"
          type="button"
          class="btn"
          style="background-color: rgb(248, 250, 132)"
        >
          1.ลุกขึ้นนั่งได้จากท่านอน (GM)
        </button>

        <div class="row">
          <div class="col-sm-9">
            <div class="card-body">
              <div class="row">
                <table class="table table-bordered border-dark">
                  <thead>
                    <tr style="background-color: ">
                      <th scope="col" width="230">อุปกรณ์</th>
                      <th scope="col" width="250">วิธีประเมิน</th>
                      <th scope="col" width="330">การฝึกทักษะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        สิ่งที่กระตุ้นให้ เด็กสนใจอยากลุกขึ้นนั่ง เช่น ลูกบอล
                        หรือ กรุ๋งกริ๋ง <br />
                        <img
                          src="https://ge.lnwfile.com/0t7375.jpg"
                          width="100"
                        />
                        <img
                          src="https://cf.shopee.co.th/file/dae1148d6a8233aa13324937cebd386a"
                          width="100"
                        />
                      </td>
                      <td>
                        1. จัดให้เด็กอยู่ในท่านอนหงายหรือนอนคว่ำ <br />
                        2. กระตุ้นให้เด็กลุกขึ้นนั่ง เช่น ใช้ลูกบอล กระตุ้น หรือ
                        ตบมือ/ใช้ท่าทางเรียก
                      </td>
                      <td>
                        1. จัดเด็กในท่านอนคว่ำ จับเข่างอทั้ง 2 ข้าง
                        จับมือเด็กทั้ง <br />
                        2 ข้าง ยันพื้น <br />
                        2. กดที่สะโพกเด็กทั้งสองข้าง
                        เพื่อให้เด็กยันตัวลุกขึ้นมาอยู่ในท่านั่ง
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
        2.ยืนอยู่ได้โดยใช้มือเกาะเครื่อง เรือนสูงระดับอก (GM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="230">อุปกรณ์</th>
                    <th scope="col" width="250">วิธีประเมิน</th>
                    <th scope="col" width="330">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      สิ่งที่กระตุ้นให้ เด็กสนใจอยากเกาะยืน เช่น ลูกบอล หรือ
                      กรุ๋งกริ๋ง <br />
                      <img
                        src="https://ge.lnwfile.com/0t7375.jpg"
                        width="100"
                      />
                      <img
                        src="https://cf.shopee.co.th/file/dae1148d6a8233aa13324937cebd386a"
                        width="100"
                      />
                    </td>
                    <td>
                      จัดเด็กยืนเกาะเครื่องเรือน พร้อมทั้งวางลูกบอล
                      หรือกรุ๋งกริ๋งไว้ให้เด็กเล่น
                    </td>
                    <td>
                      1. จัดเด็กให้ยืนเกาะเครื่องเรือน <br />
                      2. จับที่สะโพกเด็กก่อน ต่อมาเปลี่ยนจับที่เข่า
                      แล้วจึงจับมือเด็กเกาะที่เครื่องเรือน
                      <br />
                      3. เมื่อเด็กเริ่มทำได้ ให้เด็กยืนเกาะเครื่องเรือนเอง
                      โดยไม่ใช้หน้าอกพิง หรือแขนท้าวเพื่อพยุงตัว <br />
                      4.
                      อาจเปิดเพลงกระตุ้นให้เด็กยืนได้นานหรือเต้นตามจังหวะแต่ต้องคอยอยู่ใกล้
                      ๆ เพื่อระวังอันตราย
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
        3.หยิบก้อนไม้จากพื้นและถือไว้มือละชิ้น (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="170">อุปกรณ์</th>
                    <th scope="col" width="230">วิธีประเมิน</th>
                    <th scope="col" width="340">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ก้อนไม้สี่เหลี่ยมลูกบาศก์ 2 ก้อน
                      <br />
                      <img src=/img/ก้อน2.png width="150">
                    </td>
                    <td>วางก้อนไม้ลงบนพื้นพร้อมกับบอกให้เด็ก หยิบก้อนไม้</td>
                    <td>
                      1. นำวัตถุสีสดใสขนาดประมาณ 1 นิ้ว เช่น ก้อนไม้ 2 ก้อน
                      (ใช้วัตถุเหมือนกัน 2 ชิ้น)<br />

                      2. เคาะของเล่นกับโต๊ะทีละชิ้นเพื่อกระตุ้นให้เด็กหยิบ 3.
                      ถ้าเด็กไม่หยิบ ช่วยจับมือเด็กให้หยิบ
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
        4.ใช้นิ้วหัวแม่มือ และนิ้วอื่น ๆ หยิบของขึ้นจากพื้น (FM)
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
                    <td>วัตถุชิ้นเล็ก ขนาด 2 ซม.</td>
                    <td>
                      1. วางวัตถุชิ้นเล็ก 1 ชิ้นบนพื้น
                      โดยให้อยู่ในระยะที่เด็กเอื้อมมือไปหยิบได้ง่าย
                      <br />
                      2. บอกเด็กให้หยิบวัตถุ หรือแสดงให้เด็กดูก่อน
                    </td>
                    <td>
                      1. นำวัตถุสีสดใส เช่น ก้อนไม้ เชือก หรืออาหารชิ้นเล็กๆ
                      เช่น แตงกวา ขนมปัง วางตรงหน้าเด็ก <br />
                      2. หยิบของให้เด็กดู แล้วกระตุ้นให้เด็กหยิบ <br />
                      3. ถ้าเด็กทำไม่ได้ ช่วยจับมือเด็ก
                      ให้หยิบสิ่งของหรืออาหารชิ้นเล็ก
                      ลดการช่วยเหลือลงจนเด็กสามารถทำได้เอง <br />
                      4. ควรระวังไม่ให้เด็กเล่นหรือหยิบของที่เป็นอันตรายเข้าปาก
                      เช่น กระดุม เหรียญ เม็ดยา เมล็ดถั่ว เมล็ดผลไม้ เป็นต้น
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
        5.ทำตามคำสั่งง่าย ๆ เมื่อใช้ท่าทางประกอบ (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="130">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      สบตาเด็ก แล้วบอกให้เด็กโบกมือหรือตบมือ โดยใช้ท่าทางประกอบ
                      เช่น โบกมือ
                    </td>
                    <td>
                      1. เล่นกับเด็กโดยใช้คำสั่งง่าย ๆ เช่น โบกมือ ตบมือ
                      พร้อมกับทำ ท่าทางประกอบ ฝึกบ่อยๆ จนเด็กทำได้ <br />
                      2. ถ้าเด็กไม่ทำ ให้จับมือทำและค่อยๆ ลดความช่วยเหลือลงโดย
                      เปลี่ยนเป็นจับข้อมือ จากนั้นเปลี่ยนเป็นแตะข้อศอก
                      เมื่อเริ่มตบมือเองได้แล้ว ลดการช่วยเหลือลง
                      เป็นบอกให้ทำอย่างเดียว <br />
                      3. เล่นทำท่าทางประกอบเพลง
                      ฝึกการเคลื่อนไหวของนิ้วมือตามเพลง เช่น “แมงมุม”
                      “นิ้ว...อยู่ไหน”
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
        6. เด็กรู้จักการปฏิเสธด้วยการแสดงท่าทาง (EL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="240">วิธีประเมิน</th>
                    <th scope="col" width="450">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      สังเกตหรือถามว่าเด็กปฏิเสธสิ่งของอาหาร
                      หรือการช่วยเหลือจากพ่อแม่ผู้ปกครองหรือผู้ดูแลเด็กได้หรือไม่
                    </td>
                    <td>
                      1. เมื่อคนแปลกหน้ายื่นของให้ หรือขออุ้ม ให้พ่อแม่
                      ผู้ปกครองหรือ ผู้ดูแลเด็กส่ายหน้า พร้อมกับพูดว่า “ไม่เอา”
                      ให้เด็กเลียนแบบเพื่อให้เด็กรู้จักปฏิเสธ
                      โดยการแสดงท่าทาง<br />

                      2. เมื่อเด็กรับประทานอาหารหรือขนมอิ่มแล้ว ถามเด็กว่า
                      “กินอีกไหม” แล้วส่ายศีรษะพร้อมกับพูดว่า “ไม่เอา”
                      ให้เด็กเลียนแบบตาม ทำเช่นนี้กับสถานการณ์อื่นๆ
                      เพื่อให้เด็กเรียนรู้เพิ่มขึ้น
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
        7.เลียนเสียงคำพูดที่คุ้นเคยได้อย่างน้อย 1 เสียง (EL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="250">วิธีประเมิน</th>
                    <th scope="col" width="400">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ถามพ่อแม่ ผู้ปกครองหรือผู้ดูแลเด็ก
                      หรือสังเกตระหว่างประเมินว่าเด็กทำเสียงเลียนเสียงพูดได้หรือไม่
                    </td>
                    <td>
                      เปล่งเสียงที่เด็กเคยทำได้แล้ว เช่น ป๊ะ จ๊ะ จ๋า
                      รอให้เด็กเลียนเสียงตามจากนั้นเปล่งเสียงที่แตกต่างจากเดิมให้เด็กเลียนเสียงตาม
                      เช่น “แม่” “ไป” “หม่ำ” “ป(ล)า”
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
        8. ใช้นิ้วหยิบอาหารกินได้ (PS)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="220">วิธีประเมิน</th>
                    <th scope="col" width="400">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ถามจากพ่อแม่
                      ผู้ปกครองหรือผู้ดูแลเด็กว่าเด็กใช้นิ้วหยิบอาหารกินได้หรือไม่
                    </td>
                    <td>
                      1. วางอาหารที่เด็กชอบและหยิบง่ายขนาด 1 คำ เช่น
                      ขนมปังกรอบตรงหน้าเด็ก <br />

                      2. จับมือเด็กหยิบอาหารใส่ปาก
                      แล้วปล่อยให้เด็กทำเองฝึกบ่อยๆจนสามารถหยิบอาหารกินได้เอง
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
