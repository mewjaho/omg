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
    <h1>
      พัฒนาการตามอายุปรับ
    
    </h1>
    <div class="container-fluid">
      <div class="btn-group">
        <button
          type="button"
          class="btn btn-danger dropdown-toggle"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          4เดือน
        </button>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="พัฒนา.php?HN=<?php echo $row["HN"];?>">2เดือน</a>
          </li>

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
 
        
      <div class="col mt-3">
      <form action="4mdb.php" method="POST"> 
      <input type="hidden" name="HN" value="<?php echo $row["HN"];?>">
        <button
        id="h"
          type="button"
          class="btn"
          style="background-color: rgb(248, 250, 132)"
        >
          1.ท่านอนคว่ำยกอกพ้นพื้น (GM)
        </button>

        <div class="row">
          <div class="col-sm-9">
            <div class="card-body">
              <div class="row">
                <table class="table table-bordered border-dark">
                  <thead>
                    <tr style="background-color: ">
                      <th scope="col" width="80">อุปกรณ์</th>
                      <th scope="col" width="320">วิธีประเมิน</th>
                      <th scope="col" width="350">การฝึกทักษะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        กรุ๋งกริ๋ง <br />
                        <img
                          src="https://cf.shopee.co.th/file/dae1148d6a8233aa13324937cebd386a"
                          width="120"
                        />
                      </td>
                      <td>
                        จัดเด็กนอนคว่ำบนพื้นราบ แล้วเคลื่อนของเล่นให้เด็กมอง
                        ตามเพื่อให้เด็กสามารถยกศีรษะและหน้าอกพ้นพื้นได้
                      </td>
                      <td>
                        1. จัดเด็กอยู่ในท่านอนคว่ำบนพื้นราบถือของเล่น เช่น
                        <br />กรุ๋งกริ๋ง ไว้ด้านหน้าเหนือศีรษะเด็ก<br />
                        2. เรียกชื่อเด็กให้มองดูของเล่นแล้วค่อยๆ
                        เคลื่อนของเล่นขึ้นด้านบน เพื่อให้เด็กสนใจยกศีรษะ
                        โดยมือยันพื้นไว้แขนเหยียดตรงและหน้าอกพ้นพื้น
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
                    name="why1"
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
        2.มองตามสิ่งของที่เคลื่อนที่ได้เป็น มุม 180 องศา (FM)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="50">อุปกรณ์</th>
                    <th scope="col" width="350">วิธีประเมิน</th>
                    <th scope="col" width="300">การฝึกทักษะ</th>
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
                      1. จัดเด็กท่านอนหงาย <br />
                      2. กระตุ้นความสนใจเด็กให้มองที่ของเล่น โดยถือของเล่น
                      เป็นแนวโค้งจากด้านข้างด้านหนึ่งของเด็กไปยังอีกด้าน
                      ข้างด้านหนึ่งโดยให้ของเล่นห่างจากหน้าเด็ก 20–30 ซม.

                      <br />
                      <br /><font color="blue"
                        >ผ่าน : เด็กมองตามของเล่น เช่น ลูกบอลสีแดงได้ 180 องศา
                        อย่างน้อย 1 ใน 3 ครั้ง
                      </font>
                    </td>
                    <td>
                      จัดเด็กอยู่ในท่านอนหงายโดยศีรษะเด็กอยู่ในแนวกึ่งกลางลำตัว
                      ถือของเล่นห่างจากหน้าเด็กประมาณ 20-30 ซม. แล้ว
                      เขย่าหรือแกว่งของเล่นเพื่อให้เด็กสนใจมองตาม
                      จากนั้นเคลื่อนของเล่นอย่างช้าๆ
                      เป็นแนวโค้งไปทางด้านซ้ายและขวา ถ้าเด็กยังไม่มองตาม
                      ให้ช่วยประคองหน้าเด็ก เพื่อให้หันหน้ามามองตาม
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
                    name="why2"
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
        3.หันตามเสียงได้ (RL)
      </button>

      <div class="row">
        <div class="col-sm-9">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border-dark">
                <thead>
                  <tr style="background-color: ">
                    <th scope="col" width="100">อุปกรณ์</th>
                    <th scope="col" width="300">วิธีประเมิน</th>
                    <th scope="col" width="350">การฝึกทักษะ</th>
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
                      1. จัดเด็กในท่านอนหงาย<br />
                      2. นั่งลงยื่นหน้าห่างจากเด็กประมาณ 60 ซม.<br />
                      3. พูดกับเด็กในขณะที่เด็กไม่ได้มองหน้า <br />
                      <br />
                      <font color="red"
                        >** ถ้าพบว่าไม่ผ่านข้อนี้ต้องส่งพบแพทย์ เพื่อคัดกรอง
                        การได้ยิน
                      </font>
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
        4.ทำเสียงสูงๆ ต่ำๆ โต้ตอบเวลาพูดคุย (EL)
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
                      ระหว่างประเมินให้สังเกตว่าเด็กส่งเสียงสูงๆ ต่ำๆ ได้หรือไม่
                      หรือสอบถามพ่อแม่ ผู้ปกครอง
                    </td>
                    <td>
                      พูดคุยกับเด็กทำเสียงสูงๆ ต่ำๆ ให้เด็กฟังและรอจังหวะ พร้อม
                      ทั้งกระตุ้นให้เด็กออกเสียงตาม
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
                    name="why4"
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
        5.ยิ้มทักและยิ้มตอบ (PS)
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
                      สังเกตเด็กขณะทำการทดสอบหรือถามพ่อแม่ ผู้ปกครองเด็ก ว่า
                      “ยิ้มทักและยิ้มตอบคนอื่นหรือไม่”
                    </td>
                    <td>
                      1. ยิ้มและพูดคุยกับเด็กเมื่อทำกิจกรรมต่างๆ ให้เด็กทุกครั้ง
                      พูดกระตุ้นให้เด็กทำตามเช่น “ยิ้มให้คุณพ่อซิลูก”<br />
                      2. อุ้มเด็กไปหาคนที่คุ้นเคย เช่น พ่อ ปู่ ย่า ตา ยาย
                      และคนอื่น ๆ โดยยิ้มทักคนให้เด็กดู
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
                    name="why5"
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
