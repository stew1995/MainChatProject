<?php


if(isset($_POST['login'])) {
//Database connection
    require_once 'database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $select_data = mysqli_query($conn,$sql);

    if($row = mysqli_fetch_array($select_data)) {
        $_SESSION['email'] = $row['email'];
        echo"success";
    } else {
        echo "failed";
    }
    //Close conenction
    mysqli_close($conn);
} else if(isset($_POST['register'])) {
    //Database connection
    require_once 'database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES('stew','$email', '$password')";

    if(mysqli_query($conn, $sql)) {
        //Created
        echo "Created";
    } else {
        //Error
        echo "Error"  . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    //Error
}


