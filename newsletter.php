<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join our Newsletter</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>
<body class="newsletter">
    <nav class="navbar navbar-dark navbar-expand-lg bg-black bg-opacity-75">
        <div class="container-fluid menu-width">
            <a class="navbar-brand" href="welcome.html">
                <img src="Images/beverage.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="survey.php">Survey</a>
                    <a class="nav-link" href="results.php">Results</a>
                    <a class="nav-link active" aria-current="newsletter" href="newsletter.php">Newsletter</a>
                </div>
                <div class="ms-auto mt-5 mt-lg-0 text-white">
                    <?php 
                        session_start();
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
        <div class="container-fluid max-mobile bg-black bg-opacity-75 rounded text-white p-5">
            <div class="text-center">
                <h1>Join our Newsletter</h1>
                <p>Enjoy exclusive content and promotions for your favorite products.</p>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="newsletter-form" class="form">
                        <div class="form-group">
                            <label for="newsletter-name">Full Name:</label>
                            <span class="text-danger"><span id="newsNameErr"></span></span>
                            <input type="text" class="form-control" id="newsletter-name" name="newsletter-name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <span class="text-danger"><span id="emailErr"></span></span>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <button type="submit" class="btn btn-light">Submit</button>
                    </form>
                    <div id="news-msg" class="text-center fw-bold mt-5"></div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer menu-width text-center">
            <p>&copy Survey Corps</p>
        </div>
    </footer>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>