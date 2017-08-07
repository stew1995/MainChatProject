<?php
/**
 * Created by IntelliJ IDEA.
 * User: stewart
 * Date: 07/08/2017
 * Time: 18:38
 */

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body id="bodycontent">

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
                            <button type="submit" class="btn btn-outline-primary" name="signInButton" id="signInButton">Sign In</button>
                            <button type="submit" class="btn btn-outline-primary" name="signUpButton">Register</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>


</div>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/login.js"></script>
</body>
</html>
