<?php
//server side validation for login
    // session_start(); // start session

    // if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    //     // get the form input values
    //     $loginUsername = cleanInput($_POST["login-username"]);
    //     $loginPassword = cleanInput($_POST["login-password"]);

    //     // connect to the database
    //     $servername = "localhost";
    //     $serverUsername = "drexon";
    //     $serverPassword = "5y(Ctj2NxUlC7t09";
    //     $dbname = "cola(crm)";

    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $serverUsername, $serverPassword);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     // prepare and execute the SQL statement
    //     $stmt = $conn->prepare("SELECT id, name FROM users WHERE username = :username AND password = :password");
    //     $stmt->bindParam(':username', $loginUsername);
    //     $stmt->bindParam(':password', $loginPassword);
    //     $stmt->execute();

    //     // check if the user exists
    //     if ($stmt->rowCount() == 1) {
    //         $row = $stmt->fetch();
    //         $_SESSION["user_id"] = $row["id"]; // save user ID in session
    //         $_SESSION["user_name"] = $row["name"]; // save user name in session
    //         header("Location: results.php"); // redirect to dashboard
    //         exit();
    //     } else {
    //         $error = "Invalid username or password";
    //         echo json_encode(array('error' => $error));
    //         exit();
    //     }
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="container-fluid max-mobile bg-black rounded text-white p-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="login-form" class="form">
                <h2>Login</h2>
                <div class="form-group mb-3" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
                    <label for="login-username">Username:</label>
                    <input type="text" class="form-control" id="login-username" name="login-username" required>
                </div>
                <div class="form-group mb-3">
                    <label for="login-password">Password:</label>
                    <input type="password" class="form-control" id="login-password" name="login-password" required>
                </div>
                <button type="submit" name="login" class="btn btn-light">Login</button>
                <p>Don't have an account? <a href="#" id="signup-link">Sign up</a></p>
                </form>

                <form id="signup-form" class="form d-none" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
                <h2>Sign Up</h2>
                <div class="form-group mb-3">
                    <label for="name">Name:</label>
                    <span class="text-danger">*<span id="nameErr"></span></span>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group mb-3">
                    <label for="signup-username">Username:</label>
                    <span class="text-danger">*<span id="usernameErr"></span></span>
                    <input type="text" class="form-control" id="signup-username" name="signup-username">
                </div>
                <div class="form-group mb-3">
                    <label for="signup-password">Password:</label>
                    <span class="text-danger">*<span id="passwordErr"></span></span>
                    <input type="password" class="form-control" id="signup-password" name="signup-password">
                </div>
                <button type="submit" name="signup" value="signup" class="btn btn-light">Sign Up</button>
                <p>Already have an account? <a href="#" id="login-link">Login</a></p>
                </form>
                <div id="form-msg" class="text-center fw-bold mt-5"></div>
            </div>
        </div>
    </div>

    <?php
    // server side validation for account creation
    $name = $signupUsername = $signupPassword = "";
    $formErr = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $formErr = true;
        } else {
            $name = cleanInput($_POST["name"]);
        }

        if (empty($_POST["signup-username"])) {
            $formErr = true;
        } else {
            $signupUsername = cleanInput($_POST["signup-username"]);
        }

        if (empty($_POST["signup-password"])) {
            $formErr = true;
        } else {
            $signupPassword = cleanInput($_POST["signup-password"]);
        }
    }
    function cleanInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
    if (($_SERVER["REQUEST_METHOD"] == "POST") && ($formErr == false)) {
        $servername = "localhost";
        $serverUsername = "drexon";
        $serverPassword = "5y(Ctj2NxUlC7t09";
        $dbname = "cola(crm)";

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $serverUsername, $serverPassword);

        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT username FROM users WHERE username = :username");
        $stmt->bindParam(':username', $signupUsername);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $error = "username taken";
            echo json_encode(array('error' => $error));
            exit();
        } else {

            $stmt = $conn -> prepare("INSERT INTO users (name, username, password) VALUES (:name, :username, :password)");

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':username', $signupUsername);
            $stmt->bindParam(':password', $signupPassword);

            $stmt->execute();
        }
    }

    ?>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>