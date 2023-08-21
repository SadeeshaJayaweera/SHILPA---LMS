<?php

include './shilpaDatabase.php';
$conn = getDbConnect();

    $name = $_POST['name'];
    $csd = $_POST['csd'];
    $cd = $_POST['cd'];
    $cci = $_POST['cci'];
    $db = $_POST['db'];
    $cl = $_POST['cl'];
    $tc = $_POST['tc'];
    
 $sql= "INSERT INTO `course`(`C_NAME`, `C_CARD_DESCRIPTION`, `C_DESCRIPTION`, C_CARD_IMAGE, `C_DONE_BY`, `C_LINK`, `TOP_COURSE`) 
            VALUES ('$name','$csd','$cd','$cci','$db','$cl',' $tc')";
  
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "\nForm submitted successfully!";
        header('location: admin.php'); // Redirect to a success page or appropriate location after update 
    } else {
        die("Connection failed: " . mysqli_connect_error($conn));
    }


?>