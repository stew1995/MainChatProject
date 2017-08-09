<?php
/**
 * Created by IntelliJ IDEA.
 * User: stewart
 * Date: 07/08/2017
 * Time: 08:01
 */
$server = "localhost";
$user = "root";
$pass = "";
$db = "project";

try{

    $db_con = new PDO("mysql:host={$server};dbname={$db}",$user,$pass);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e->getMessage();
}?>