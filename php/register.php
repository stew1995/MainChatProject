<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 27/07/2017
 * Time: 17:50
 */

if(isset($_POST['register'])) {
    //Database connection
    require_once 'database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (email, password) VALUES('".$email."', '".$password."')";

    if(mysqli_query($conn, $sql)) {
        //Created
    } else {
        //Error
    }
    mysqli_close($conn);
}