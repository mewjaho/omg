<?php 
    session_start();
    include('dbm.php');

    $errors = array();

    if (isset($_POST["HNm"])) {
        $HN = mysqli_real_escape_string($connect, $_POST['HN']);
       

        if (empty($HN)) {
            array_push($errors, "Hospital Number is required");
        }

       

        if (count($errors) == 0) {
            
            $query = "SELECT Nurse.HN FROM Nurse WHERE HN = '$HN'  ";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['HN'] = $HN;
                header("location:p3.php?HN=$HN");
            } else {
                array_push($errors, "Wrong Hospital Number");
                $_SESSION['error'] = "Wrong Hospital Number!";
                header("location: login.php");
            }
        } else {
            array_push($errors, "Hospital Number is required");
            $_SESSION['error'] = "Hospital Number is required";
            header("location:login.php");
        }
    }
    ?>
