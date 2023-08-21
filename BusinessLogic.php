<?php

include './shilpaDatabase.php';


// .....................................................new courses display.....................................................

function getLatestCourse() {

    $conn = getDbConnect();

     $sql = "SELECT C_ID, C_NAME, C_CARD_DESCRIPTION, C_DESCRIPTION, C_CARD_IMAGE, C_DONE_BY, C_LINK FROM course ORDER BY C_ADD_DATE DESC LIMIT 4";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['C_ID'];
        $name = $row['C_NAME'];
        $csd = $row['C_CARD_DESCRIPTION'];
        $cd = $row['C_DESCRIPTION'];
        $cci = $row['C_CARD_IMAGE'];
        $cdb = $row['C_DONE_BY'];
        $c1 = $row['C_LINK'];

        echo '
        <a class="ancor" href="coursepage.php?ID= ' . $id . ' &name= ' . $name . ' &description= ' . $cd . ' &doneby= ' . $cdb . ' &originalUrl= ' . $c1 . ' ">
            <div class="course-card">
                <img src=" ' . $cci . ' " alt="" class="course-card-head">
                    <div class="card-container">
                        <div class="card-text">                                           
                            <p class="ct1"> ' . $name . ' </p>
                            <p class="ct2"> ' . $csd . ' </p>
                            <p class="ct3"> Done By: ' . $cdb . '</p>
                        </div>
                    </div>
            </div>
        </a>
        ';
    }
    $conn->close();
}

// ........................................................top courses.......................................................... 
function getTopCourse() {

    $conn = getDbConnect();

    $sql = "SELECT C_ID, C_NAME, C_CARD_DESCRIPTION, C_DESCRIPTION, C_CARD_IMAGE, C_DONE_BY, C_LINK FROM course ORDER BY TOP_COURSE DESC LIMIT 4";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['C_ID'];
        $name = $row['C_NAME'];
        $csd = $row['C_CARD_DESCRIPTION'];
        $cd = $row['C_DESCRIPTION'];
        $cci = $row['C_CARD_IMAGE'];
        $cdb = $row['C_DONE_BY'];
        $c1 = $row['C_LINK'];

        echo '
        <a class="ancor" href="coursepage.php?ID= ' . $id . ' &name= ' . $name . ' &description= ' . $cd . ' &doneby= ' . $cdb . ' &originalUrl= ' . $c1 . ' ">
            <div class="course-card">
                <img src=" ' . $cci . ' " alt="" class="course-card-head">
                    <div class="card-container">
                        <div class="card-text">                                           
                            <p class="ct1"> ' . $name . ' </p>
                            <p class="ct2"> ' . $csd . ' </p>
                            <p class="ct3"> Done By: ' . $cdb . ' </p>
                        </div>
                    </div>
            </div>
        </a>
        ';
    }
    $conn->close();
}

// ....................................................all courses display.......................................................
function getallCoruse() {

    $conn = getDbConnect();

    $sql = "SELECT C_ID, C_NAME, C_CARD_DESCRIPTION, C_DESCRIPTION, C_CARD_IMAGE, C_DONE_BY, C_LINK FROM course ORDER BY C_ID";
    
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['C_ID'];
        $name = $row['C_NAME'];
        $csd = $row['C_CARD_DESCRIPTION'];
        $cd = $row['C_DESCRIPTION'];
        $cci = $row['C_CARD_IMAGE'];
        $cdb = $row['C_DONE_BY'];
        $c1 = $row['C_LINK'];

        echo '
        <a class="ancor" href="coursepage.php?ID= ' . $id . ' &name= ' . $name . ' &description= ' . $cd . ' &doneby= ' . $cdb . ' &originalUrl= ' . $c1 . ' ">
            <div class="course-card">
                <img src=" ' . $cci . ' " alt="" class="course-card-head">
                    <div class="card-container">
                        <div class="card-text">                                           
                            <p class="ct1"> ' . $name . ' </p>
                            <p class="ct2"> ' . $csd . ' </p>
                            <p class="ct3"> Done By: ' . $cdb . ' </p>
                        </div>
                    </div>
            </div>
        </a>
        ';
    }
    $conn->close();
}

?>