<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/index.css">


</head>
<body>
<?php

require_once 'php/phpLoginSession/config.php';

//Button if set
if(isset($_POST['signInButton'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Using md5 puts the password into a hash
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $select_data = mysqli_query($conn,$sql);

    if(mysqli_num_rows($select_data)==1) {
        echo "User Exists";

        $_SESSION['user'] = $email;
    }
}
?>
<div class="container-fluid">
    <div class="row">
        <!--Main section container -->
        <div class="offset-md-2 col-md-8 ">
            <div class="row">
                <!--Top Image-->
                <img src="img/space.jpg" width="100%" height="500px">
            </div>
            <div class="row">
                <!--Left Section-->
                <div class="col-md-6 red">What do to put here</div>
                <!--Sign In Section-->
                <div class="col-md-6">Sign In
                    <!--Sign in Form-->
                    <div class="signInContainor">
                        <!--Post data using AJAX
                        login() validates data and sends it to the backend

                        Need to put in a name field-->
                        <form method="post" id="login-form">
                            <div class="form-group">
                                <label for="emailInput">Email</label>
                                <input type="email" class="form-control" name="emailInput"id="emailInput" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label for="passwordInput">Password</label>
                                <input type="password" class="form-control" name="passwordInput" id="passwordInput" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-outline-primary" name="signInButton">Sign In</button>
                            <button type="submit" class="btn btn-outline-primary" name="signUpButton">Register</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>


</div>








<script src="js/jquery-3.2.1.min.js"></script>


<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/transition.min.js"></script>
<script src="js/login.js"></script>



</body>
</html>