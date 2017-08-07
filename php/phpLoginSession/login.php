<?php
/**
 * Created by IntelliJ IDEA.
 * User: stewart
 * Date: 07/08/2017
 * Time: 08:02
 */

session_start();

require_once 'config.php';


//Button if set
if(isset($_POST['signInButton'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Using md5 puts the password into a hash

    try {
        $stmt = $db_con->prepare("SELECT * FROM users WHERE user_email=:email");
        $stmt->execute(array(":email"=>$email));
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        $count = $stmt -> rowCount();

        if($row['user_password'] == $password) {
            echo "ok";
            $_SESSION['user_session'] = $row['user_id'];
            session_write_close();

        } else {
            echo "email or password doesnt match on the system";
        }
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}
//Here do an else for the sign up button
//TODO:
?>