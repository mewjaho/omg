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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
    <link rel="stylesheet" href="p3.css" />
  <title></title>
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
        <li class="list active" >
          <b></b>
          <b> </b>
          <a href="/mom/page/p3.php?HN=<?php echo $row["HN"];?>">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="title">Home</span>
          </a>
        </li>

        <li class="list" >
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
        <li class="list" id="out" style="background-color: rgb(248, 247, 246);">
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



  <div class="container" >
    <div class="row ">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
      <?php
include_once 'connect.php';
if(isset($_POST['send'])){
  $HN = $_POST['HN'];
  $msg = $_POST['msg'];
  $date = date('y-m-d h:i:s');
  $sql_insert = mysqli_query($con,"INSERT INTO message (HN,msg,cr_date) VALUES ('$HN','$msg','$date')");
  if($sql_insert){
    echo"<script>alert('message send successfully');</script>";

  }else{
    echo mysqli_query($con);
    exit;
  }
}
?>     
  <form method="POST">
        <div class="mb-3" id="notify">
  <label for="exampleFormControlInput1" class="form-label">HN</label>
  <input type="text" name="HN" readonly value="<?php echo $row['HN'];?>" class="form-control" id="exampleFormControlInput1" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Problem</label>
  <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button type="submit" name="send" class="btn btn-danger" >Submit</button>

</form>


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