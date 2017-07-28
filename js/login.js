/**
 * Created by Stewart on 27/07/2017.
 */
function login() {
    var email = $("#emailInput").val();
    var pass = $("#passwordInput").val();

    if(email != "" && pass !="") {
        //Loading spinner to go here if used
        $.ajax({
            type:'post',
            url: 'php/login.php',
            data: {
                login:"login",
                email:email,
                password:pass
            },
            success: function (response) {
                if(response == "success") {
                    window.location.href = "index.php";
                } else {
                    //Loading none
                    alert("Wrong Details");
                }
            }
        });
    } else {
        alert("Fill in all details");
    }

    return false;
}

function register() {
    var email = $("#emailInput").val();
    var pass = $("#passwordInput").val();

    if(email != "" && pass !="") {

        $.ajax({
            type:'post',
            url:'php/login.php',
            data: {
                register: "register",
                email: email,
                password: pass
            },
            success: function (response) {
                if(response == "success") {
                    window.location.href = "registerConfirm.html";
                } else {
                    //Loading none
                    alert("Email already taken");
                }
            }
        });
    } else {
        alert("Fill in all details");
    }

}