<?php
include('dbconnection.php');
session_start();
$gd = $_SESSION['gid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Password</title>
    <style>
        /* Reset some default styles */
        body, h1, form, input {
            margin: 0;
            padding: 0;
        }

        /* Set up some basic styles */
        body {
            background: linear-gradient(to right, #ff5f6d, #ffc371);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Style the form container */
        form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
        }

        /* Style the heading */
        h1 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        /* Style the input fields */
        input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        /* Style the submit button */
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="reset.php" method="POST">
        <h1>Set New Password</h1>
        <input type="password" name="pass" placeholder="Enter new password" required>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $password = $_POST['pass'];
    $qryd = "UPDATE `login` SET `password` = '$password' WHERE `u_id` = '$gd'";
    $run = mysqli_query($dbcon, $qryd);
    if ($run == true) {
        ?>
        <script>
            alert('Password Updated Successfully :)');
            window.open('logout.php', '_self');
        </script>
        <?php
    }
}
?>
