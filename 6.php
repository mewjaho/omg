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
          6เดือน
        </button>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="พัฒนา.php?HN=<?php echo $row["HN"];?>">2เดือน</a>
          </li>
          <li><a class="dropdown-item" href="4m.php?HN=<?php echo $row["HN"];?>">4เดือน</a></li>
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
  <form action="6mdb.php" method="POST">
      <div class="col mt-3">
      <input type="hidden" name="HN" value="<?php echo $row["HN"];?>">
        <button
        id="h"
          type="button"
          class="btn"
          style="background-color: rgb(248, 250, 132)"
        >
          1.ยันตัวขึ้นจากท่านอนคว่ำ โดยแขน เหยียดตรงทั้งสองข้างได้ (GM)
        </button>

        <div class="row">
          <div class="col-sm-9">
            <div class="card-body">
              <div class="row">
                <table class="table table-bordered border-dark">
                  <thead>
                    <tr style="background-color: ">
                      <th scope="col" width="50">อุปกรณ์</th>
                      <th scope="col" width="320">วิธีประเมิน</th>
                      <th scope="col" width="300">การฝึกทักษะ</th>
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
                        1. จัดเด็กนอนคว่ำ <br />
                        2. เขย่าของเล่น เช่น กรุ๋งกริ๋ง
                        ให้อยู่ด้านหน้าเหนือศีรษะเด็ก อย่างช้า ๆ
                        เพื่อให้เด็กมองตามจนเด็กสามารถยกศีรษะ และลำตัวพ้นพื้น
                      </td>
                      <td>
                        1. จัดเด็กอยู่ในท่านอนคว่ำ <br />
                        2. ถือของเล่นไว้ด้านหน้าเหนือศีรษะเด็ก <br />
                        3. เรียกชื่อเด็กให้มองดูของเล่น แล้วค่อย ๆ
                        เคลื่อนของเล่นขึ้น เพื่อให้เด็กสนใจ
                        ยกศีรษะและลำตัวตามโดยมือยันพื้นไว้
                        แขนเหยียดตรงจนหน้าอกและท้องพ้นพื้น
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
                    id=""
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
                    id=""
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
        2.ดึงขึ้นนั่งจากท่านอนหงาย เด็ก สามารถชัน / ยกศีรษะขึ้นมาก่อน ลำตัว (GM)
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
                      จัดเด็กนอนหงาย จับมือเด็กค่อย ๆ ดึงเด็กขึ้นมาอยู่ในท่านั่ง
                      ค่อยๆ เพิ่มระยะแล้วสังเกตว่าเด็กสามารถงอคอ
                      ยกศีรษะขึ้นก่อนลำตัว
                    </td>
                    <td>
                      มองหน้าและพูดคุยกับเด็กแล้วจับข้อมือเด็กดึงขึ้นจากพื้นช้า
                      ๆ เพื่อให้เด็กยกศีรษะตาม หยุดสักครู่
                      เพื่อให้เด็กเกร็งคอไว้ แล้ว ปล่อยตัวเด็กให้เอนลง
                      หยุดอีกสักครู่ แล้วจึงปล่อยตัวเด็กให้ นอนลงบนพื้นช้าๆ ค่อย
                      ๆ เพิ่มระยะที่ดึงเด็กขึ้นจากพื้น
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
                    id=""
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
                    id=""
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
                    name="why2"
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
        3.พลิกคว่ำขณะนอนหงายได้ (GM)
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
                    <th scope="col" width="300">การฝึกทักษะ</th>
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
                      1.จัดเด็กนอนหงาย <br />
                      2. วางของเล่น เช่น
                      กรุ๋งกริ๋งไว้ด้านข้างในระยะที่มือเด็กเอื้อม ไม่ถึง
                      แล้วกระตุ้นความสนใจจนเด็กสามารถเอื้อมไปหยิบ ของเล่นได้
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
                    id=""
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
                    id=""
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
        4.เอื้อมมือหยิบและถือวัตถุไว้ ขณะ อยู่ในท่านอนหงายหรือนั่งตัก (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color:">
                    <th scope="col" width="40">อุปกรณ์</th>
                    <th scope="col" width="300">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
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
                      1.จัดเด็กนอนหงายหรือนั่งตัก <br />
                      2. ถือกรุ๋งกริ๋งให้ห่างจากหน้าเด็ก 20-30 ซม. ให้เด็กมอง
                      และหยิบที่ของเล่น <br />
                      3. ถ้าเด็กไม่สามารถทำได้เอง ให้ทดสอบไม่เกิน 3 ครั้ง

                      <br />
                      <br /><font color="blue"
                        >ผ่าน : เด็กสามารถเอื้อมมือข้างหนึ่งไปที่ของเล่น เช่น
                        <br />
                        กรุ๋งกริ๋ง และ หยิบกรุ๋งกริ๋งได้ 1 ใน 3 ครั้ง
                      </font>
                    </td>
                    <td>
                      1.จัดเด็กอยู่ในท่านอนหงายหรือนั่งตัก
                      แล้วเขย่าของเล่นให้ห่างจากตัวเด็กประมาณ 20-30 ซม.
                      <br />
                      2.ถ้าเด็กไม่เอื้อมมือกมาคว้าของเล่นให้ใช้ของเล่นแตะ เบาๆ
                      ที่หลังมือเด็กและขยับของเล่นถอยห่างในระยะที่เด็ก เอื้อมถึง
                      ถ้าเด็กยังคงไม่เอื้อมมือมาคว้าให้จับมือเด็กมาหยิบ
                      ของเล่นทำซ้ำจนเด็กสามารถเอื้อมมือไปหยิบได้เอง
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
                    id=""
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
                    id=""
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
        5.สนใจฟังคนพูดและสามารถมองไป ที่ของเล่นที่ผู้ทดสอบเล่นกับเด็ก (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="20">อุปกรณ์</th>
                    <th scope="col" width="420">วิธีประเมิน</th>
                    <th scope="col" width="280">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ตุ๊กตาผ้า <br />
                      <img
                        src="https://inwfile.com/s-cj/ad3601.jpg"
                        width="170"
                      />
                    </td>
                    <td>
                      นั่งหันหน้าเข้าหาเด็กแล้วเรียกชื่อเด็ก
                      เมื่อเด็กมองแล้วหยิบ ตุ๊กตาผ้าให้เด็กเห็นในระดับสายตาเด็ก
                      กระตุ้นให้เด็กสนใจ ตุ๊กตาผ้าด้วยคำพูด
                      ถ้าเด็กทำไม่ได้ในครั้งแรกให้ทำซ้ำได้ รวมไม่เกิน 3 ครั้ง

                      <br />
                      <br /><font color="blue"
                        >ผ่าน : เด็กสบตาและมองที่ของเล่น เช่น ตุ๊กตาผ้า นาน 5
                        วินาที <br />
                        อย่างน้อย 1 ใน 3 ครั้ง
                      </font>
                    </td>
                    <td>
                      เด็กนั่งบนตักและหันหน้าเข้าหาพ่อแม่ ผู้ปกครอง แล้วสบตา
                      และพูดคุยกับเด็ก นำของเล่นมาอยู่ในระดับสายตาเด็กพูดคุย
                      กับเด็กเกี่ยวกับของเล่น
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
                    id="\"
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
                    id=""
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
        6.จ้องมองหรือร้องไห้เมื่อเห็นคน แปลกหน้า (PS)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color:">
                    <th scope="col" width="280">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      สังเกตเด็กหรือถามจากพ่อแม่ ผู้ปกครองว่า
                      “เมื่อเด็กเห็นคนแปลกหน้า เขาทำอย่างไร”
                    </td>
                    <td>
                      กระตุ้นให้เด็กมองเมื่อพบคนแปลกหน้าที่เด็กไม่คุ้นเคย อาจ
                      เป็นเพื่อนบ้าน แขกที่มาเยี่ยม หรือบุคคลอื่นที่พบทั่วไป โดย
                      กระตุ้นทุกครั้งที่มีโอกาส
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
                    id=""
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
                    id=""
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
        7.เลียนแบบการเล่นทำเสียงได้ (EL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="240">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      ให้ใช้ปากทำเสียง เช่น ทำเสียงจุ๊บหรือถามจากพ่อแม่
                      ผู้ปกครอง
                    </td>
                    <td>
                      สบตาและพูดคุยกับเด็กทำเสียง “จุ๊บจุ๊บ” หรือเดาะลิ้นให้เด็ก
                      ดูหลาย ๆ ครั้ง แล้วรอให้เด็กทำตาม ถ้าเด็กทำไม่ได้ทำให้เด็ก
                      ดูหลาย ๆ ครั้ง
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
                    id=""
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
                    id=""
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
