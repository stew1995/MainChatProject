<?php
/**
 * Created by IntelliJ IDEA.
 * User: stewart
 * Date: 30/07/2017
 * Time: 16:07
 */

require 'database.php';

$sql = "SELECT * FROM `message`";

if($result = mysqli_query($conn, $sql)) {
    while($row = mysqli_fetch_row($result)) {

        echo "<div class=\"row\">".
            "<div class=\"col-md-9\">".
            "{$row[1]}".
            "</div><div class=\"col-md-3\">".
            "{$row[3]}".
            "</div>".
            "<div class=\"col-md-12\">".
            "{$row[2]}".
            "</div></div>";

    }
    //Free the set


    mysqli_free_result($result);
} else {
    echo 'Something has gone wrong - messages';
}

