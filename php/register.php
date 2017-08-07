<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 27/07/2017
 * Time: 17:50
 */


    //Database connection
    require_once 'database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES('Stewart','swflack@gmail.com', 'hello')";

    if(mysqli_query($conn, $sql)) {
        //Created
        echo "Created";
    } else {
        //Error
        echo "Error"  . mysqli_error($conn);
    }
    mysqli_close($conn);
