<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 28/07/2017
 * Time: 18:53
 */

session_start();


/*include_once 'php/phpLoginSession/config.php';
$stmt = $db_con->prepare("SELECT * FROM user WHERE ID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);*/

?>
<?php
if(isset($_SESSION['user'])) {
    echo $_SESSION['user'];
} else {
    echo "error";
}?>

<body>


<div>
    <strong>Hello <?php echo $_SESSION['user']; ?></strong>
    <!-- Nav tabs -->

    <ul class="nav nav-pills nav-fill">
        <li class="nav-item"><a class="nav-link " href="#d" data-toggle="tab">Search</a></li>
        <li class="nav-item"><a class="nav-link active" id="a" data-toggle="tab">Chat</a></li>
        <li class="nav-item"><a class="nav-link " id="c" data-toggle="tab">Map</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Calender</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" id="b" data-toggle="tab">Create Event</a>
                <a class="dropdown-item" href="#">View Event</a>
                <a class="dropdown-item" href="#">...</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Settings</a>
            </div>
        </li>



    </ul>


    <div class="tab-content">
        <div class="tab-pane" id="d">
            <form action="post">
                <div class="form-group">
                    <label class="control-label sr-only" for="searchbar">Input group with success</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="searchbar" id="searchbar" aria-describedby="inputGroupSuccess1Status" >
                        <span class="input-group-addon">@</span>
                    </div>
                    <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                </div>
            </form>
            <div id="livesearch"></div>
        </div>
    </div>

</div>
<div id="body"></div>


<!--<script src="js/jquery-3.2.1.min.js"></script>-->


<!--<script src="js/bootstrap.min.js"></script>-->
<script src="js/main.js"></script>
    <!--<script src=""></script>-->





</body>
