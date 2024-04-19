<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ContactUs</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .mail-form {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .mail-form h2 {
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        .mail-form p {
            color: #666;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 15px 20px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        .textarea {
            height: 150px;
        }

        .button {
            width: 100%;
            border-radius: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 15px 20px;
            border: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mail-form">
                <h2 class="text-center">Drop a message</h2>
                <p class="text-center">We are waiting for your response..</p>
                <form action="contactUs.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Email Id">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea" name="message" placeholder="Compose your message.."></textarea>
                    </div>
                    <div class="form-group">
                        <input class="button" type="submit" name="send" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['send'])) {
    include('../dbconnection.php');
    //access user entered data
    $eml = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];

    $qry = "INSERT INTO `contacts` (`email`, `subject`, `msg`) VALUES ('$eml', '$sub', '$msg')";
    $run = mysqli_query($dbcon, $qry);

    if ($run == true) {

    ?> <script>
            alert('Thanks, we will be looking at your concern :)');
            window.open('home.php', '_self');
        </script>
    <?php
    }
}
?>
