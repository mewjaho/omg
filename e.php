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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ประเมินภาวะการเจริญเติบโตเด็ก </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="pop.css" />
    <script src="/js/jj.js"></script>
    <script src="/js/pop.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
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
    <br>
    <h1>ประเมินการเจริญเติบโต <style>
      
    </style></h1>
  <div class="container-fluid">
     
    <div class="col">
    
      <div class="row">
        <div class="col-sm-8">
          <div class="card">
            <div class="card-body" style="background-color: rgb(219, 246, 253);">


            <label>วันที่ปัจจุบัน :</label>
<input type="text" disabled="disabled" value="
<?php
date_default_timezone_set("Asia/Bangkok");
 echo date("j F Y");
?> ">

</p>

    <form class="horizontal" id="myform1" name="form1" method="POST" action="date.php" >


        <label>วันเกิด :</label>
<input type="date" name="birthday" >

<label>เพศ</label>
<select name="sex" id="sex">
						  <option value="1">ชาย</option>
						  <option value="2">หญิง</option>
						</select>

<!-- <label>เกณฑ์ต้องการประเมิน :</label>
<select name="da" id="da">
<option value="2m">2 เดือน</option>
<option value="4m">4 เดือน</option>
<option value="6m">6 เดือน</option>
<option value="9m">9 เดือน</option>
<option value="1y">1 ปี</option>
<option value="1y6m">1 ปี 6 เดือน</option>
<option value="2y">2 ปี</option>
<option value="2y6m">2 ปี 6 เดือน</option>
</select> -->
<div class="input-group mt-3">
<span class="input-group-text" id="b">ชื่อน้อง</span>
<input type="text" class="form-control" name="N">
</div>
<div class="input-group mt-3">
            <span class="input-group-text" id="b">น้ำหนัก *</span>
            <input type="number" min="" max="" class="form-control" name="weight" id="weight"
                autocomplete="off" step="0.1" value=""  required>
            <span class="input-group-text" id="b">กิโลกรัม</span>                      
    </div>
    <div class="input-group mt-3">
            <span class="input-group-text" id="b">ส่วนสูง *</span>
            <input type="number" min="" max="" class="form-control" name="height" id="height"
                autocomplete="off" value=""  required>
            <span class="input-group-text" id="b">เซนติเมตร</span>
    </div>     

    <div class="input-group mt-3">
            <span class="input-group-text" id="b">รอบศรีษะ *</span>
            <input type="number" min="" max="" class="form-control" name="head" id="head"
                autocomplete="off" value=""  required>
            <span class="input-group-text" id="b">เซนติเมตร</span>
    </div> 
     


    
    <div class="input-group text-center bd-green-100 mb-3">
            <div class="col my-2" >
                <button type="submit" style="font-family: Bai Jamjuree;font-weight:bold;" name="btn_submit" id="btn"  class="btn btn-danger">
                    ดูผล</button>
           </div>
           </div>
                </div>
        </div> 
        </div>
    </div></div>
    </form>
 



    <div id="dataModal" class="modal fade bd-example-modal-lg" role="document"> 

    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h4 class="modal-title">แสดงรายการ</h4>
                <button type="button" class="close btn-sm btn-danger" data-bs-dismiss="modal">x </button>
            </div>
            
          
            
            
            <div class="modal-body" id="detail">
            </div>
            

            <div class="modal-footer">
           
               <button type="button"  class="btn btn-success" >Save</button>
                
            </div>

        </div>

    </div>
</div>
<script>


$(function(){
     $('#myform1').on('submit',function(e){
         e.preventDefault();
          $.ajax({
            url:"/mom/page/date.php",
            method:"POST",
            data:$('#myform1').serialize(),         
            success:function(data){
                
                $('#detail').html(data); 
                $('#dataModal').modal('show');
            },
          });
      });
          // toggle button change address 
   
    

});
</script>
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