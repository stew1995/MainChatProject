
$(document).ready(function() {
    //Validation
    $("#login-form").validate({
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
    });

    function submitForm() {
        var data = $("#login-form").serialize();

        $.ajax({
            type: "POST",
            url: "php/phpLoginSession/login.php",
            data: data,
            success: function (response) {
                if(response == "ok") {
                    //Do stuff to enter

                    setTimeout(' window.location.href ="main.php"; ',4000);
                    //window.location.href ="main.php";
                    //$("#bodycontent").load("main.php");
                } else {
                    //Error message
                }
            }
        })
        return false;
    }
})