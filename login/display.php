<?php
require_once "../shilpaDatabase.php";
$conn = getDbConnect();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Operation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-5"><a href="reg_via_admin.php" class="text-light">Add User</a>
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

            echo '<button class="btn btn-danger"><a href="delete.php?deleteid=' . $row['UserId'] . '" class="text-light">Delete</a></button>';
            echo '</td>';
            echo '</tr>';


          }
        }
        ?>
      </tbody>

    </table>
  </div>
  <div class="container">
    <button class="btn btn-primary my-5"><a href="registeradmin.php" class="text-light">Add Admin</a>
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
            echo '<button class="btn btn-danger"><a href="delete1.php?deleteid=' . $row['UserId'] . '" class="text-light">Delete</a></button>';
            echo '</td>';
            echo '</tr>';


          }
        }
        ?>
</body>

</html>