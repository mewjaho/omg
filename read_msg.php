<?php include_once 'connect.php';?>
<?php if(isset($_GET['id'])){
  $main_id = $_GET['id'];
  $sql_update = mysqli_query($con,"UPDATE message SET status=1 WHERE id='$main_id'");

}
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
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
    <table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Hospital Number</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sr_no=1;
    $sql_get = mysqli_query($con,"SELECT * FROM message WHERE status=1 ");
    while ($main_result = mysqli_fetch_assoc($sql_get)) :
    ?>
    <tr>
      <th scope="row"><?php echo $sr_no++;?></th>
      <td><?php echo $main_result['HN']; ?></td>
      <td><?php echo $main_result['msg']; ?></td>
      <td><?php echo $main_result['cr_date']; ?></td>
    </tr>
    <?php endwhile?>
  </tbody>
    </div>

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