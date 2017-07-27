<?php

session_status();
if(isset($_POST['login'])) {
//Database connection
    require_once 'database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $select_data = mysqli_query("select * from user where email='$email' and password='$password'");

    if($row = mysqli_fetch_array($select_data)) {
        $_SESSION['email'] = $row['email'];
        echo"success";
    } else {
        echo "failed";
    }
    exit();
}


