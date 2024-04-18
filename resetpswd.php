<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Verification Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #ff5f6d, #ffc371);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            max-width: 600px;
            width: 100%;
        }

        h1, h2, p {
            text-align: center;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
            font-weight: bold;
        }

        h2 {
            color: #333;
        }

        p {
            font-size: 1.2rem;
            color: #666;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .btn-primary {
            background-color: #333;
            border-color: #333;
        }

        .btn-primary:hover {
            background-color: orange;
            border-color: orange;
        }

        a {
            color:#333;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .sign-in {
            text-align: right;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Velocity</h1>
        <p>Fastest Courier Service</p>
        <div class="sign-in"><a href="index.php">Sign In</a></div>
        <div class="row">
            <div class="col-md-12">
                <h2>Verify The Following Details</h2>
                <p>To Reset Your Password</p>
                <form action="resetpswd.php" method="get">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email Id" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Verify" />
                    </div>
                    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once "dbconnection.php";
// require_once "session.php";

if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
    $qryy = "SELECT * FROM `login` WHERE `email`='$email'";
    $run = mysqli_query($dbcon, $qryy);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        ?>
        <script>
            alert("Opps! Email not matched..Try again or Create New One");
            window.open('resetpswd.php', '_self');
        </script>
        <?php
    } else {
        $data = mysqli_fetch_assoc($run);
        $id = $data['u_id'];
        session_start();
        $_SESSION['gid'] = $id;
        ?>
        <script>
            window.open('reset.php', '_self');
        </script>
        <?php
    }
}
?>
