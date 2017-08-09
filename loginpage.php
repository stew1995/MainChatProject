<?php

require_once 'php/phpLoginSession/config.php';

session_start();


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
<head>
    <meta charset="UTF-8">
    <title>Login</title>

</head>
<body>
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="js/login.js"></script>
</body>
