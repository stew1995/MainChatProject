<?php
/**
 * Created by IntelliJ IDEA.
 * User: stewart
 * Date: 30/07/2017
 * Time: 15:46
 */
require 'database.php';

/** @var Input field $_POST */

if(isset($_POST['noimage'])) {
    $message = $_POST['message'];
    $user = $_SESSION['email'];


    $sql = "INSERT INTO message (user, message) VALUES('$user', '$message')";

    if(mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error";
    }



    $conn->close();
} else if(isset($_POST['image'])) {
    $message = $_POST['message'];
    $user = $_POST['userid'];
    $img = $_POST['imgName'];

}
function checkImg ($targetFile, $imageFileType, $uploadOk) {
    if (file_exists($targetFile)) {
        echo "<script>alert('Sorry, file already exists.')</script>";
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    if ($_FILES["fileUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        echo "<script>alert('Sorry, your file is too large.')</script>";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
}




