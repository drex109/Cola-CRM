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