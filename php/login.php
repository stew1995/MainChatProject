<?php

session_start();
if(isset($_POST['login'])) {
//Database connection
    require_once 'database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $select_data = mysqli_query($conn,$sql);

    if($row = mysqli_fetch_array($select_data)) {
        $_SESSION['email'] = $row['email'];
        echo"success";
    } else {
        echo "failed";
    }
    exit();
} else if (isset($_POST['signUpButton'])) {
    //Code for register
} else {
    //Error
}


