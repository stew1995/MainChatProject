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
    $user = $_POST['userid'];

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
    $targetDirectory = "C:/xampp/htdocs/Web Apps/Web/MainChat/img/UserFiles/";

    $targetFile = $targetDirectory . basename($_FILES["fileUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    checkImg($targetFile, $imageFileType);
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFile)) {
            //Code to put into the database
            echo "The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";

            $sql = "INSERT INTO images (imgLocation) VALUES ('$targetFile')";
            if(mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error";
            }

            $conn->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else if(isset($_POST['imagewithtext'])) {
    echo "<script>alert('Image text')</script>";
}

function checkImg ($targetFile, $imageFileType) {
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    if ($_FILES["fileUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
}




