
$(document).ready(function() {


    //Validation
   /* $("#login-form").validate({
        rules: {
            //name of the input fields
            passwordInput: {
                required: true,
            },
            emailInput: {
                required: true,
                email: true
            },
        },
        messages: {
            passwordInput: {
                required: "Please enter your password"
            },
            emailInput: "Please enter your email address"
        },
        submitHandler: submitForm
    });*/

    $("#login-form").submit(function () {
        var data = $("#login-form").serialize();

        $.ajax({
            type: "POST",
            url: "php/phpLoginSession/login.php",
            data: data,
            success: function (response) {
                $("body").load("main.php");
            }
        });
        return false;
    })


})