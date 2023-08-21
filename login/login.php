<?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location: ../welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form Shilpa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <section class="vh-100 bg-image" style="background-image: url('register_background.jpg');">
    <div class="mask d-flex align-items-center h-100 ">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-center mb-5">Login to Shilpa</h2>
                <div class="container1">
                  <?php
                  if (isset($_POST["login"])) {
                    $email = $_POST["email"];
                    $password = $_POST["password"];

                    require_once "../shilpaDatabase.php";
                    $conn = getDbConnect();
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if ($user) {
                      if (password_verify($password, $user["Password"])) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        $_SESSION["email"] = $email;

                        if ($user["user_type"] === 'a' || $user["user_type"] === 'm') {
                          header("Location: ../admin.php");
                        } else {
                          header("Location: ../welcome.php");
                        }

                        session_write_close(); // Close the session before redirection
                        exit; // Use exit() after redirecting to prevent further script execution
                      } else {
                        echo "<div class='alert alert-danger'>Password does not match</div>";
                      }

                    } else {
                      echo "<div class='alert alert-danger'>Email does not match</div>";
                    }
                  }
                  ?>

                </div>
                <form action="login.php" method="post">
                  <div class="form-outline mb-4">
                    <input type="email" class="form-control form-control-lg" placeholder="Email" name="email" />
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" class="form-control form-control-lg" placeholder="Password"
                      name="password" />
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" value="Login" name="login"
                      class="btn btn-success btn-block btn-lg mt-3">Login</button>
                  </div>
                  <p class="text-center text-muted mt-5 mb-0">Don't Have an account? <a href="register.php"
                      class="fw-bold text-body"><u>Create here</u></a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>