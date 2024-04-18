<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: rgb(63,94,251);
      background: rgb(36,17,0);
      background: rgb(100,121,9);
      background: rgb(230,136,124);
background: linear-gradient(90deg, rgba(230,136,124,1) 2%, rgba(255,218,0,1) 28%);
    }

    
    header {
      background-color: #007bff;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 24px;
      margin: 0;
    }

    header img {
      width: 100px;
      height: auto;
    }

    
    main {
      padding: 80px 50px;
      text-align: center;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 3rem;
    }

    .image-section {
      text-align: center;
      margin-bottom: 4rem;
      background-color: #fff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 300px;
      transition: all 0.3s ease;
    }

    .image-section:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    h2 {
      font-size: 48px;
      margin-bottom: 60px; 
      line-height: 1.7;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    h5 {
      font-size: 20px; 
      margin-bottom: 25px;
      line-height: 1.6;
      color: #6c757d;
      font-weight: 600;
      font-family: 'Poppins', sans-serif; 
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
      main {
        padding: 50px 30px;
      }

      h2 {
        font-size: 36px;
        margin-bottom: 40px;
      }

      h5 {
        font-size: 18px;
        margin-bottom: 20px;
      }

      .container {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <?php include('header.php'); ?>
  <main>
    <h1>Welcome to Velocity Courier Management Service</h1>
    <h3>The services we offer</h3>
    <div class="container">
      <div class="image-section">
        <h5>Fast & Reliable Delivery</h5>
      </div>
      <div class="image-section">
        <h5>Track Your Package Anytime</h5>
      </div>
      <div class="image-section">
        <h5>Safe & Secure Delivery</h5>
      </div>
    </div>
  </main>
</body>

</html>