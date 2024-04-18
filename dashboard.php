

<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header('location: ../login.php');
    exit; // Stop further processing if not logged in
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
    <title>Admin Dashboard</title>
    <style>
        /* Global Styles */
        body {
            background-color: #f0f5f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
          
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            max-width: 1024px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Header Styles */
        header {
            background-color: rgba(52, 58, 64, 0.8);
            color: #fff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo,
        .logout {
            text-decoration: none;
            color: inherit;
        }
        .logo {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .logout {
            font-size: 0.8rem;
        }

        /* Main Content Styles */
        main {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }
        .welcome-message {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        .actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        /* Actions List Styles */
        .actions li {
            list-style: none;
            margin-bottom: 1rem;
        }
        .actions a {
            text-decoration: none;
            color: #fff;
            font-size: 1.2rem;
            padding: 1rem 2rem;
            border-radius: 4px;
            background-color: #343a40;
            transition: background-color 0.2s ease;
            display: block;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .actions a:hover {
            background-color: #29323a;
        }

        /* Image Styles */
        .image-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }
        .image-container img {
            max-width: 200px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header class="container">
        <a href="../index.php" class="logo">Login As User</a>
        <a href="logout.php" class="logout">Log Out</a>
    </header>
    <main class="container">
        <h1 class="welcome-message">Welcome To Admin Dashboard</h1>
        <section class="actions">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="deletedata.php">Delete Data</a></li>
                <li><a href="deleteusers.php">Delete Users</a></li>
            </ul>
        </section>
        
    </main>
</body>
</html>