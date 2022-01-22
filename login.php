<?php
    session_start();
    include('dbm.php'); 

    $HN=$_GET['HN'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Preterm Followup</title>
    <link rel="stylesheet" href="loginm.css" />
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
   

  <body >


  <a href="/p1/p1.php"><img src="/img/icon.png" width="50" id="icon"></a><br>
      <img 
        src="https://cdn-icons-png.flaticon.com/512/3790/3790737.png" width="120"
         />
        <p> Preterm Follow&nbsp;up</p>
    
    <br />
  
       <h1>Hospital Number</h1>
       <form action="login_db.php" method="POST"> 
       <?php if (isset($_SESSION['error'])) : ?>
        
        <h style="color:red;">  
                 <?php 
                     echo $_SESSION['error'];
                     unset($_SESSION['error']);
                 ?>
                 <?php endif ?><br>
       

                
    
       <input type="text" name="HN" placeholder="Hospital Number" ><br>
       
      <button type="submit"name="HNm" >Sign In</button></a>
      
   
</form>
    
    

</html>
