/**
* Created by IntelliJ IDEA.
* User: Stewart
* Date: 27/07/2017
* Time: 16:47
*/
<?php
session_start();
if(isset($_POST['logout']))
{
    unset($_SESSION['email']);
}
?>
<!DOCTYPE html>
<html>
    <body>
    <h2>Hi, <?php $_SESSION['email'];?></h2>
        <form method='post'>
            <input type='submit' name='logout' value='Logout'>
        </form>
    </body>
</html>
