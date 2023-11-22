$(document).ready(function () {
    $('#signup-form').hide();

    $('#signup-link').click(function () {
        $("#signin-form").hide("fast");
        $('#signup-form').show("fast");
    });

    $('#signin-link').click(function () {
        $('#signup-form').hide("fast");
        $('#signin-form').show("fast");
    });
});