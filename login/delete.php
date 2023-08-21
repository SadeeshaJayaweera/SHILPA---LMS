<?php
require_once "../shilpaDatabase.php";
$conn = getDbConnect();
if(isset($_GET['deleteid'])){
    $UserId=$_GET['deleteid'];

    $sql = "DELETE FROM users WHERE UserId = '$UserId'";
    $result = $conn->query($sql);
    if ($result) {
        //echo "Deleted Successfull";
        header('location:../admin.php');
    }else{
        die(mysqli_error($conn));
    }





}
?>