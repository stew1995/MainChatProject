<?php
/**
 * Created by IntelliJ IDEA.
 * User: stewart
 * Date: 30/07/2017
 * Time: 15:46
 */
        require 'database.php';


        /** @var Input field $_POST */
        $message = $_POST['message'];
        $user = $_POST['userid'];

        $sql = "INSERT INTO message (user, message) VALUES('$user', '$message')";

        if(mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error";
        }



        $conn->close();



