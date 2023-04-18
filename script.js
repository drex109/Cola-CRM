//survey question and results button fade-in
$(".question:not(:first)").hide();
const resultsBtn = $('.results-btn');
resultsBtn.hide()
$(document).ready(function() {
    $('input[type=radio]').click(function() {
        const currentQuestion = $(this).closest('.question');
        const nextQuestion = currentQuestion.next('.question');
        
        if (nextQuestion.length) {
            nextQuestion.fadeIn("slow");
            $('html, body').animate({
                scrollTop: nextQuestion.offset().top
            }, 0);
        } else {
            resultsBtn.fadeIn("slow")
            $('html, body').animate({
                scrollTop: resultsBtn.offset().top
            }, 0);
        }
    });
});

//progress bar
$(document).ready(function() {
    const questionsTotal = $('.question').length;
    let questionsAnswered = 0;
    const progressBar = $('.progress-bar');

    $('input[type=radio]').change(function() {
        const radioInput = $(this)
        const question = radioInput.closest('.question');
        if (radioInput.is(':checked') && !question.hasClass('answered')) {
            question.addClass('answered');
            questionsAnswered++;
            const progress = (questionsAnswered / questionsTotal) * 100;
            progressBar.css('width', progress + '%');
        }
    });
});

//store survey answers in local storage
$(document).ready(function() {
    $('#questions').submit(function(event) {
        event.preventDefault();

        var sweetness = $('input[name=sweetness]:checked').val();
        var carbonation = $('input[name=carbonation]:checked').val();
        var taste = $('input[name=taste]:checked').val();
        var packaging = $('input[name=packaging]:checked').val();
        var calories = $('input[name=calories]:checked').val();
        var mixed = $('input[name=mixed]:checked').val();
        var acidity = $('input[name=acidity]:checked').val();
        var texture = $('input[name=texture]:checked').val();
        var flavor = $('input[name=flavor]:checked').val();
        var aftertaste = $('input[name=aftertaste]:checked').val();

        var answers = {
            sweetness: sweetness,
            carbonation: carbonation,
            taste: taste,
            packaging: packaging,
            calories: calories,
            mixed: mixed,
            acidity: acidity,
            texture: texture,
            flavor: flavor,
            aftertaste: aftertaste
        };

        localStorage.setItem('surveyValues', JSON.stringify(answers));

        window.location.href = 'results.html';
    });
});

//swap login & sign-up forms
$(document).ready(function() {
    $('#signup-link').click(function() {
        $('#login-form').addClass('d-none');
        $('#signup-form').removeClass('d-none');
        $('#form-msg').text('');
        return false;
    });

    $('#login-link').click(function() {
        $('#signup-form').addClass('d-none');
        $('#login-form').removeClass('d-none');
        $('#form-msg').text('');
        return false;
    });
});

//client-side validation for sign-up
$(document).ready(function() {
    $("#signup-form").submit(function (event) {
        event.preventDefault();

        var name = $("input[name='name']").val();
        var signupUsername = $("input[name='signup-username']").val();
        var signupPassword = $("input[name='signup-password']").val();

        var formErr = false;

        if (name === ''){
            $("#nameErr").text("Name is required")
            formErr = true;
        } else{
            $("#nameErr").text("");
        }

        if (signupUsername === ''){
            $("#usernameErr").text("Username is required")
            formErr = true;
        } else if (!/^[a-zA-Z0-9_-]{3,16}$/i.test(signupUsername)) {
            $("#usernameErr").text("Username must be between 3 and 16 characters long, and may only contain letters, numbers, underscores, and hyphens.");
            formErr = true;
        } else{
            $("#usernameErr").text("");
        }

        if (signupPassword === ''){
            $("#passwordErr").text("Password is required")
            formErr = true;
        } else if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/i.test(signupPassword)) {
            $("#passwordErr").text("Password must contain at least 8 characters, including at least one letter and one number.");
            formErr = true;
        } else{
            $("#passwordErr").text("");
        }

        if (formErr) {
            $('#form-msg').addClass('text-danger').text('Please fill out all required fields.');
        } else {
            $.ajax({
                type: 'POST',
                url: 'login.php',
                data: $('#signup-form').serialize(),
                
                success: function() {
                        $('#form-msg').removeClass('text-danger').addClass('text-success').text('You are now signed-up. Login to see your survey results');
                        $('form')[0].reset();
                        $("form").find("button[type='submit']").prop("disabled", true);
                        $("form").find("button[type='submit']").text("Signed up");
                    // } else {
                    //     $('#form-msg').addClass('text-danger').text('There seems to have been an error. Please try again later.');
                    // }
                },
                error: function() {
                    $('#form-msg').addClass('text-danger').text('There seems to have been an error. Please try again later.');
                }
            });
        }
    });
});