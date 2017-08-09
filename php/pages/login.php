<?php
session_start();
$session = $_SESSION['user_session'];
require_once 'config.php';


//Button if set
if(isset($_POST['signInButton'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Using md5 puts the password into a hash

    try {
        $stmt = $db_con->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute(array(":email"=>$email));
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        $count = $stmt -> rowCount();

        if($row['password'] == $password) {
            echo "ok";
            $session = $row['ID'];
            session_write_close();

        } else {
            echo "email or password doesnt match on the system";
        }
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}?>
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
