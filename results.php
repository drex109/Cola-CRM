<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center results">
    <?php
        session_start();

        if (!isset($_SESSION["username"])) {
            header("Location: login.php");
            exit();
        }
    ?>
    <div id="results-greeting" class="container-fluid mx-auto max-mobile text-center p-5 rounded text-white bg-black bg-opacity-75">
        <h1><?php echo 'Welcome, ' . $_SESSION['username'] . '!' ?></h1>
        <p class="m-0">Based on your answers, you likely prefer <span id="results"></span></p>
        <div id="pie" class="m-4 mx-auto">
            <canvas id="results-pie"></canvas>
        </div>
        <p class="m-0">Thank you for participating in this survey! Please <a href="newsletter.html">join our Newsletter</a></p>  
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>