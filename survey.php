<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>
<body class="d-flex justify-content-center align-items-center">
    <form id="questions" class="container-fluid max-mobile mx-auto bg-black bg-opacity-75 rounded text-white m-5 p-5">
        <div class="question container-fluid mb-4">
            <h4>Question 1</h4>
            <p>Which do you prefer in a cola: one that's sweeter, or one that's less sweet?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sweetness" id="sweeter" value="sweeter">
                <label class="form-check-label" for="sweeter">Sweeter</label> <!--pepsi -->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sweetness" id="less-sweet" value="less sweet">
                <label class="form-check-label" for="less-sweet">Less sweet</label> <!--coke-->
            </div>
        </div>
        <div class="question container-fluid mb-4">
            <h4>Question 2</h4>
            <p>When choosing a cola, how important is the level of carbonation to you?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="carbonation" id="more-carb" value="more carbonation">
                <label class="form-check-label" for="more-carb">More carbonation</label> <!--coke-->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="carbonation" id="less-carb" value="less carbonation">
                <label class="form-check-label" for="less-carb">Less carbonation</label> <!--pepsi -->
            </div>
        </div>
        <div class="question container-fluid mb-4">
            <h4>Question 3</h4>
            <p>Do you prefer a cola that has a stronger taste, or a milder taste?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="taste" id="strong-taste" value="stronger taste">
                <label class="form-check-label" for="strong-taste">Stronger taste</label> <!--coke-->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="taste" id="mild-taste" value="milder taste">
                <label class="form-check-label" for="mild-taste">Milder taste</label> <!--pepsi -->
            </div>
        </div>
        <div class="question container-fluid mb-4">
            <h4>Question 4</h4>
            <p>What type of packaging do you prefer for your cola - cans, bottles or other?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="packaging" id="cans" value="cans">
                <label class="form-check-label" for="cans">Cans</label> <!--coke-->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="packaging" id="bottles" value="bottles">
                <label class="form-check-label" for="bottles">Bottles</label> <!--pepsi-->
            </div>
        </div>
        <div class="question container-fluid mb-4">
            <h4>Question 5</h4>
            <p>How important is the calorie content of your cola to you?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="calories" id="very-import" value="important">
                <label class="form-check-label" for="very-import">Important</label> <!--coke-->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="calories" id="not-import" value="not important">
                <label class="form-check-label" for="not-import">Not important</label> <!--pepsi-->
            </div>
        </div>
        <div class="question container-fluid mb-4">
            <h4>Question 6</h4>
            <p>Do you prefer to drink cola on its own or mixed with other beverages?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="mixed" id="own" value="on its own">
                <label class="form-check-label" for="own">On its own</label> <!--coke-->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="mixed" id="mixed" value="mixed">
                <label class="form-check-label" for="mixed">Mixed</label> <!--pepsi-->
            </div>
        </div>
        <div class="question container-fluid mb-4">
            <h4>Question 7</h4>
            <p>How important is the level of acidity in your cola selection?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="acidity" id="more-acidic" value="more acidic">
                <label class="form-check-label" for="more-acidic">More acidic</label> <!--coke-->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="acidity" id="less-acidic" value="less acidic">
                <label class="form-check-label" for="less-acidic">Less acidic</label> <!--pepsi-->
            </div>
        </div>
        <div class="question container-fluid mb-4">
            <h4>Question 8</h4>
            <p>Do you prefer a cola that has a smooth texture or a rough texture?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="texture" id="smooth" value="smooth">
                <label class="form-check-label" for="smooth">Smooth</label> <!--pepsi-->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="texture" id="rough" value="rough">
                <label class="form-check-label" for="rough">Rough</label> <!--coke-->
            </div>
        </div>
        <div class="question container-fluid mb-4">
            <h4>Question 9</h4>
            <p>Do you prefer a cola with a caramel-like flavor or a citrusy flavor?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flavor" id="citrus" value="citrusy">
                <label class="form-check-label" for="citrus">Citrusy</label> <!--pepsi-->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flavor" id="caramel" value="caramel-like">
                <label class="form-check-label" for="caramel">Caramel-like</label> <!--coke-->
            </div>
        </div>
        <div class="question container-fluid mb-4">
            <h4>Question 10</h4>
            <p>Do you prefer a cola with a stronger aftertaste or a milder aftertaste?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="aftertaste" id="strong-aftertaste" value="stronger aftertaste">
                <label class="form-check-label" for="strong-aftertaste">Stronger aftertaste</label> <!--coke-->
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="aftertaste" id="mild-aftertaste" value="milder aftertaste">
                <label class="form-check-label" for="mild-aftertaste">Milder aftertaste</label> <!--pepsi-->
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        
        <button class="results-btn btn btn-light mt-5" type="submit">See Results</button>
        
    </form>

    <img id="surveyImg" src="Images/snowy machines.jpg" alt="snowy machines">

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>