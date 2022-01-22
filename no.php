<?php include_once 'connect.php';?>
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
  <title>Document</title>
</head>
<body>
  <?php
  $sql_get = mysqli_query($con,"SELECT * FROM message WHERE status=0");
  $count= mysqli_num_rows($sql_get);


  ?>
<div class="dropdown">
  <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  <ion-icon name="notifications"></ion-icon><span class="badge bg-danger"><?php echo $count;?></span>
</a>
<div class="dropdown-menu">
  <?php
  $sql_get1 = mysqli_query($con,"SELECT * FROM message WHERE status=0");
  if(mysqli_num_rows($sql_get1)>0)
  { while($result = mysqli_fetch_assoc($sql_get1))
    {
      echo '<a class="dropdown-item text-primary " href="read_msg.php?id='.$result['id'].'">'.$result['msg'].'</a>';
      echo ' <div class="dropdown-divider"></div>';
    }



  }else{
    echo '<a class="dropdown-item text-danger font-weight-bold" href="#">Sorry! No Messages</a>';
  }
   
   ?>

</div> 





<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
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