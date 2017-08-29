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
//Old message layout to check if working
 /*       echo "<div class='outsidebox'><div class=\"row\">".
            "<div class=\"col-md-8 messageUser\">".
            "{$row[1]}".
            "</div><div class=\"col-md-3 messageDate\">".
            "{$row[3]}".
            "</div>".
            "<div class=\"col-md-11 messageText\">".
            "{$row[2]}".
            "</div></div></div>";
*/

           echo "<div class='card w-85  messagebox'>".
                    "<div class='card-header messageUser text-white '>".
            "{$row[1]}".
                    "</div>".
                    "<div class='card-body'>".
                        "<p class='card-text'>".
               "{$row[2]}".
               "</p>".
                        "<div class='dropdown-divider'></div>".
                        "<p class='card-text'><small class='text-muted'>".
               "posted such and such ago".
                "</small></p></div></div>";

    }
    //Free the set


    mysqli_free_result($result);
} else {
    echo 'Something has gone wrong - messages';
}

