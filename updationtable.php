<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}
?>
<?php
include('../dbconnection.php');
$idd = $_GET['sid'];
$uqry = "SELECT * FROM `courier` WHERE `c_id`='$idd'";
$run = mysqli_query($dbcon, $uqry);
$data = mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: black;
            color: #fff;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: orange;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff8c00;
        }
    </style>
</head>
<body>
    <form action="editdata.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <th colspan="4" style="text-align: center;">Update The Details As Required</th>
            </tr>
            <tr>
                <th colspan="2">SENDER</th>
                <th colspan="2">RECEIVER</th>
            </tr>
            <tr>
                <th colspan="2"></th>
                <th colspan="2"></th>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="sname" value="<?php echo $data['sname']; ?>" required></td>
                <td>Name:</td>
                <td><input type="text" name="rname" value="<?php echo $data['rname']; ?>" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="semail" value="<?php echo $data['semail']; ?>" readonly></td>
                <td>Email:</td>
                <td><input type="text" name="remail" value="<?php echo $data['remail']; ?>" required></td>
            </tr>
            <tr>
                <td>PhoneNo.:</td>
                <td><input type="number" name="sphone" value="<?php echo $data['sphone']; ?>" required></td>
                <td>PhoneNo.:</td>
                <td><input type="number" name="rphone" value="<?php echo $data['rphone']; ?>" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="textfield" name="saddress" value="<?php echo $data['saddress']; ?>" required></td>
                <td>Address:</td>
                <td><input type="textfield" name="raddress" value="<?php echo $data['raddress']; ?>" required></td>
            </tr>
           
            <tr>
                <td>Weight:</td>
                <td><input type="number" name="wgt" value="<?php echo $data['weight']; ?>" required></td>
                <td>ReceiptNo.:</td>
                <td><input type="number" name="billno" value="<?php echo $data['billno']; ?>" required></td>
            </tr>
            <tr>
                <td>Date:</td>
                <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly /></td>
                <td>Items Image:</td>
                <td><input type="file" name="simg" value="<?php echo $data['image']; ?>"></td>
            </tr>
            <tr>
                <input type="hidden" name="idd" value="<?php echo $data['c_id']; ?>" />
                <td colspan="4" align="center"><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>