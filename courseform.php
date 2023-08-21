<!doctype html>
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
    <form action="create.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th colspan="2">
                    <h3>Course Form</h3>
                </th>
            </tr>
            <tr>
                <td>Course Name:</td>
                <td><input type="text" id="name" name="name" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Course Short Description:</td>
                <td><textarea name="csd" rows="4" autocomplete="off"></textarea></td>
            </tr>
            <tr>
                <td>Course Description:</td>
                <td><textarea name="cd" rows="10" autocomplete="off"></textarea></td>
            </tr>
            <tr>
                <td>Course Card Image Link:</td>
                <td><input type="text" id="cci" name="cci" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Course Done by:</td>
                <td><input type="text" id="db" name="db" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Course Link:</td>
                <td><input type="text" id="cl" name="cl" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Top Course:</td>
                <td><input type="radio" id="" name="tc" value="yes">Yes <input type="radio" id="" name="tc" value="yes"> No </td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit"></th>
            </tr>
        </table>
    </form>
    <?php
   /* if (isset($_GET['success'])) {
        $successMessage = urldecode($_GET['success']);
        echo "<p class='success-message'>{$successMessage}</p>";

        echo "<script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.pathname);
        }
    </script>";
    }*/
    ?>
</body>

</html>