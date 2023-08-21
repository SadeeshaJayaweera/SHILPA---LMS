<?php
include_once './shilpaDatabase.php';
include_once './module/Course.php';

/*
include './BusinessLogic.php';
    $courses = displaydata();  
*/

if (isset($_GET['deleteID'])) {
    $deleteID = $_GET['deleteID'];
    
}
$conn = getDbConnect();

    $sql = "DELETE FROM `course` WHERE C_ID = $deleteID";
    
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo 'Deleted successfully';
        header('location:admin.php');
    } else {
        die("Deleted failed: " . mysqli_error($conn));
    }
    
    $conn->close();

?>
