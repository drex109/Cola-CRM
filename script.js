//survey question fade-in
$(document).ready(function() {
    $(".question:not(:first)").hide();
    $('input[type=radio]').click(function() {
        $(this).closest('.question').next('.question').fadeIn("slow");
    });
});

//progress bar
$(document).ready(function() {
    const questionsTotal = $('.question').length;
    let questionsAnswered = 0;
    const progressBar = $('.progress-bar');

    $('input[type=radio]').change(function() {
        if ($(this).is(':checked')) {
            questionsAnswered++;
            const progress = (questionsAnswered / questionsTotal) * 100;
            progressBar.css('width', progress + '%');
        }
    });
});