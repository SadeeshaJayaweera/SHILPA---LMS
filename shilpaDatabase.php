<?php

function getDbConnect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shilpa";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    "Connected successfully!";
    
    return $conn;
 /*   
    if ($conn->connect_error) {
        echo "connection success";
    } else {
        die(mysqli_connet_error($conn));
    }*/
}
?>

