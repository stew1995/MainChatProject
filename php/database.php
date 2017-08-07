<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 27/07/2017
 * Time: 15:51amber1995chat
 */

$server = "localhost";
$user = "root";
$pass = "amber1995";
$db = "chatproject";


//Connection
$conn = mysqli_connect($server, $user, $pass, $db);
//Check connection
if(!$conn) {
    die("connection failed" . mysqli_connect_error());
}

