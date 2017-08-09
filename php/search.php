<?php
/**
 * Created by IntelliJ IDEA.
 * User: stewart
 * Date: 07/08/2017
 * Time: 21:30
 */

require_once 'database.php';

if(isset($_GET['q'])) {
    $keyword = trim($_GET['q']);
    $array = array();

    $sql = "SELECT * FROM message WHERE message LIKE '%{$keyword}%'";

    $query = mysqli_query($conn, $sql);

    $result_count = mysqli_num_rows($query);
    //Table header
    echo "<table class='table table-hover'>";
    echo "<th class='info'>User</th><th class='info'>Message</th><th class='info'>Time</th>";
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr><td>".$row['user']."</td><td>".$row['message']."</td><td>".$row['time_sent']."</td></tr>";
        //echo "<div class='well'>".$row['message']."</div>";
        //echo "User:".$row['user']." ".$row['message'].'<br />';
    }
} else {
    echo "";
}









mysqli_close($conn);