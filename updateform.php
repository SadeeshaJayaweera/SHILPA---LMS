<!doctype html>

<?php

include_once './shilpaDatabase.php';

$conn = getDbConnect();

$id = $_GET['updateID'];

$sql = "SELECT * FROM `course` WHERE `C_ID` = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['C_NAME'];
$csd = $row['C_CARD_DESCRIPTION'];
$cd = $row['C_DESCRIPTION'];
$cci  = $row['C_CARD_IMAGE'];
$cdb = $row['C_DONE_BY'];
$cl = $row['C_LINK'];
$tc = $row['TOP_COURSE'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $csd = $_POST['csd'];
    $cd = $_POST['cd'];
    $cci = $_POST['cci'];
    $db = $_POST['db'];
    $cl = $_POST['cl'];
    $tc = $_POST['tc'];

    $sql = "UPDATE `course` SET `C_NAME`='$name',`C_CARD_DESCRIPTION`='$csd',`C_DESCRIPTION`='$cd',`C_CARD_IMAGE`='$cci',`C_DONE_BY`='$db',`C_LINK`='$cl', `TOP_COURSE`='$tc' WHERE C_ID=$id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "\nForm Updated successfully!";
        header('location: admin.php'); // Redirect to a success page or appropriate location after update
    } else {
        die(mysqli_die($conn));
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Form</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        form {
            margin-top: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        h3 {
            text-align: center;
        }

        table {
            width: 100%;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p.success-message {
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <th colspan="2"><h3> Course Form </h3></th>
        </tr>
        <tr>
            <td>Course Name:</td>
            <td><input type="text" id="name" name="name" size="50" autocomplete="off" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>Course Short Description:</td>
            <td><textarea name="csd" rows="4" cols="60" autocomplete="off" ><?php echo $csd ?></textarea></td>
        </tr>
        <tr>
            <td>Course Description:</td>
            <td><textarea name="cd" rows="10" cols="60" autocomplete="off" ><?php echo $cd ?></textarea></td>
        </tr>
        <tr>
            <td>Course Card Image:</td>
            <td><input type="text" id="cci" name="cci" size="40" autocomplete="off" value="<?php echo $cci ?>"></td>
        </tr>
        <tr>
            <td>Course Done by:</td>
            <td><input type="text" id="db" name="db" size="50" autocomplete="off" value="<?php echo $cdb ?>"></td>
        </tr>
        <tr>
            <td>Course Link:</td>
            <td><input type="text" id="cl" name="cl" size="50" autocomplete="off" value="<?php echo $cl ?>"></td>
        </tr>
        <tr>
            <td>Top Course:</td> <td><input type="radio" name="tc" value="Yes">Yes <input type="radio"  name="tc" value="No">No </td>
        </tr>
        <tr>
            <th colspan="2">
                <input type="hidden" name="courseData" value="<?php echo $_GET['updateID']; ?>">
                <input type="submit" id="update" name="update" value="Update">
            </th>
        </tr>
    </table>
</form>
<?php
if (isset($_GET['success'])) {
    $successMessage = urldecode($_GET['success']);
    echo "<p style='color: green; text-align: center;'>{$successMessage}</p>";

    echo "<script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.pathname);
            }
        </script>";
}
?>
</body>
</html>