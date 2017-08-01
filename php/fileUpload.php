<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 01/08/2017
 * Time: 12:23
 */
require 'database.php';
$targetDirectory = "C:/xampp/htdocs/Web Apps/Web/MainChat/img/UserFiles/";

$targetFile = $targetDirectory . basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);
//Check if actual file or fake
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
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