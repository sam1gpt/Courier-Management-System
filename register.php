<?php
require_once "dbconnection.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $fullname = $_POST['name'];
    $phn = $_POST['ph'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if($password==$confirm_password){

    $qry = "INSERT INTO `users` (`email`, `name`, `pnumber`) VALUES ('$email', '$fullname', '$phn')";
    $run = mysqli_query($dbcon,$qry);
    
    if($run==true){

        $psqry = "INSERT INTO `login` (`email`, `password`, `u_id`) VALUES ('$email', '$password',LAST_INSERT_ID() )";
        $psrun = mysqli_query($dbcon,$psqry);
        ?>  <script>
            alert('Registration Successfully :)'); 
            window.open('index.php','_self');
            </script>
        <?php
    }
    }else{
        ?>  <script>
            alert('Password mismatched!!'); 
            </script>
        <?php
    }

}   
?> 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #f6d365, #fda085);
            font-family: 'Poppins', sans-serif; /* Poppins font */
            color: #000; /* Text color */
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #000; /* Header color */
            text-align: center;
        }

        p {
            color: #000; /* Paragraph color */
            text-align: center;
        }

        label {
            color: #000; /* Label color */
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        .btn {
            border-radius: 25px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        input[type="password"]:focus,
        .btn:focus {
            box-shadow: 0 0 10px #fff;
        }

        .btn-danger {
            background-color: #ff6347;
            border-color: #ff6347;
        }

        .btn-danger:hover {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        a {
            color: #ff6347; /* Link color */
        }

        a:hover {
            color: #e63946; /* Darker red on hover */
        }

        hr {
            border-color: #000; /* Horizontal line color */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Register</h2>
                <p>Please fill this form to create an account.</p>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Num.</label>
                        <input type="number" name="ph" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-danger" value="Register">
                    </div>
                    <p>Already have an account? <a href="index.php">Login here</a>.</p>
                </form>
            </div>
        </div>
        <hr>
        <p>Notice: If the email Id is registered before, please register with different Email ID.</p>
    
    </div>
</body>

</html>
