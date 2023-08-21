<?php

include './shilpaDatabase.php';
$conn = getDbConnect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
  
  
<a href="login/logout.php"><button class="btn btn-danger mt-2 ">Log Out</button></a>
    <div class="admin-header">
      <p>Welcome To Admin Panel</p>
      
    </div>
    <p class="up">User Table</p>
    <button class="btn btn-primary my-5"><a href="login/reg_via_admin.php" class="text-light">Add User</a>
    </button>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">UserId</th>
          <th scope="col">Full_Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM users WHERE user_type NOT IN ('a', 'm')"; // or "SELECT * FROM `users`" with backticks
        $result = $conn->query($sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['UserId'] . '</td>';
            echo '<td>' . $row['Full_Name'] . '</td>';
            echo '<td>' . $row['Email'] . '</td>';
            echo '<td>' . $row['Password'] . '</td>';
            echo '<td>';
            echo '<button class="btn btn-danger"><a href="login/delete.php?deleteid=' . $row['UserId'] . '" class="text-light">Delete</a></button>';
            echo '</td>';
            echo '</tr>';
          }
        }
        ?>
      </tbody>

    </table>
  </div>
  <p class="up">Admin Table</p>
  <div class="container">
    <button class="btn btn-primary my-5"><a href="login/registeradmin.php" class="text-light">Add Admin</a>
    </button>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">UserId</th>
          <th scope="col">Full_Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM users WHERE user_type='a'"; // or "SELECT * FROM `users`" with backticks
        $result = $conn->query($sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['UserId'] . '</td>';
            echo '<td>' . $row['Full_Name'] . '</td>';
            echo '<td>' . $row['Email'] . '</td>';
            echo '<td>' . $row['Password'] . '</td>';
            echo '<td>';
            echo '<button class="btn btn-danger"><a href="login/delete.php?deleteid=' . $row['UserId'] . '" class="text-light">Delete</a></button>';
            echo '</td>';
            echo '</tr>';
          }
        }
        ?>
      </tbody>
    </table>
  </div>
  <p class="up">Course Table</p>

  <div class="admin-button">
    <button class="btn btn-warning my-5"><a href="courseform.php" class="text-light">Add Course</a>
  </div>
  <div class="admin-table-container">
    <div class="admin-table">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>C_DESCRIPTION</th>
            <th>DESCRIPTION</th>
            <th>IMAGE</th>
            <th>DONE_BY</th>
            <th>LINK</th>
            <th>TOP_COURSE</th>
            <th>ADD_DATE</th>
            <th colspan="2">OPERATION</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //$sql = "SELECT C_ID, C_NAME, C_CARD_DESCRIPTION, C_DESCRIPTION, C_DONE_BY, C_LINK, TOP_COURSE, C_ADD_DATE FROM course";
          $sql = "SELECT * FROM course";
          $result = mysqli_query($conn, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['C_ID'];
              $name = $row['C_NAME'];
              $csd = $row['C_CARD_DESCRIPTION'];
              $cd = $row['C_DESCRIPTION'];
              $cci = $row['C_CARD_IMAGE'];
              $cdb = $row['C_DONE_BY'];
              $c1 = $row['C_LINK'];
              $tp = $row['TOP_COURSE'];
              $cad = $row['C_ADD_DATE'];

              echo '
              <tr>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $csd . '</td>
                <td>' . $cd . '</td>
                <td><img class="adi" src=" ' . $cci . ' " alt="" class="course-card-head"></td>
                <td>' . $cdb . '</td>
                <td>' . $c1 . '</td>
                <td>' .$tp. '</td>
                <td>' . $cad . '</td>
                <td><a href="./updateform.php?updateID=' . $id . ' "><button class="btn btn-success">Update</button></a></td>
                
                <td><a href="./delete.php?deleteID=' . $id . ' "><button class="btn btn-danger">Delete</button></a></td>
              </tr>
              ';
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="admin-footer">
    copyright@shilpa
  </div>

</body>

</html>