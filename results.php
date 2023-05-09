<?php
    session_start();

    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>
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
<body class="results">
    <nav class="navbar navbar-dark navbar-expand-lg bg-black bg-opacity-75">
        <div class="container-fluid">
            <a class="navbar-brand" href="welcome.html">
                <img src="Images/beverage.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="survey.php">Survey</a>
                    <a class="nav-link active" aria-current="results" href="results.php">Results</a>
                    <a class="nav-link" href="newsletter.php">Newsletter</a>
                </div>
                <div class="ms-auto mt-5 mt-lg-0 text-white">
                    <?php
                        if (!isset($_SESSION["username"])) {
                            echo "<a class='text-decoration-none' href='login.php'>Login/Signup";
                        } else {
                            echo "Signed in as: " . $_SESSION["username"];
                            echo "<br>";
                            echo "<a href='logout.php'>Logout</a>";
                        }
                    ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="content-wrapper d-flex justify-content-center align-items-center">
        <div id="results-greeting" class="container-fluid mx-auto max-mobile text-center p-5 rounded text-white bg-black bg-opacity-75">
            <h1><?php echo 'Welcome, ' . $_SESSION['username'] . '!' ?></h1>
            <p class="m-0">Based on your answers, you likely prefer <span id="results"></span></p>
            <div id="pie" class="m-4 mx-auto">
                <canvas id="results-pie"></canvas>
            </div>
            <p class="m-0">Thank you for participating in this survey! Please <a href="newsletter.php">join our Newsletter</a></p>  
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>