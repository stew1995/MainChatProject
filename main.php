<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 28/07/2017
 * Time: 18:53
 */

/*session_start();
if(!isset($_SESSION['user_session'])) {
    header("Location:index.html");
}
*/
include_once 'php/phpLoginSession/config.php';
$stmt = $db_con->prepare("SELECT * FROM users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="css/main.css">


</head>
<body>

<div>
    <strong>Hello <?php echo $_SESSION['user_session']; ?></strong>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li><a href="#a" data-toggle="tab">Hello</a></li>
        <li><a href="#b" data-toggle="tab">World</a></li>
        <li><a href="#c" data-toggle="tab">Tab C</a></li>
        <li><a href="#d" data-toggle="tab">Search</a></li>

    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="a">AAA</div>
        <div class="tab-pane" id="b">BBB</div>
        <div class="tab-pane" id="c">CCC</div>
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

<div class="container-fluid">
    <div class="row">
        <!--Left contanior-->
        <div class="col-md-3">

            <div id="map"></div>
        </div>
        <!--Center contanior-->
        <div class="col-md-6 centerWindow">
            <!--Top Section-->
            <div class="chatWindow" id="chatWindow">
                <p>Message</p>
                <!--PHP file for reading data-->


            </div>

            <!--Bottom container-->
            <div class="messageContainer">

                <!--Chat container-->
                <div class="chatContainer">
                    <!--Boostrap form for message-->
                    <form class="form-horizontal" id="showForm"  onsubmit="return sendMessageToAjax();" enctype="multipart/form-data" >
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-outline-primary sendButton">Send</button>
                            <label class="control-label col-sm-3 sr-only" for="messageInput">Message Input</label>
                            <div class="col-md-10">
                                <!--Input Field-->
                                <div class="input-group">
                                    <input type="text" name="messageInput" class="form-control" id="messageInput" aria-describedby="inputGroupSuccess2Status">
                                    <span class="input-group-addon" id="fileUploadButton">@</span>
                                </div>
                                <!--Image button for upload-->
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                <span id="inputGroupSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>
                        <!--Hidden file upload-->
                        <div class="form-group">
                            <label class="sr-only"for="fileUpload">File input</label>
                            <input type="file" id="fileUpload" name="fileUpload">
                            <!-- <p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!--Right contanior-->
        <div class="col-md-3">


        </div>
    </div>
</div>
<!--<script src="js/jquery-3.2.1.min.js"></script>-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/transition.min.js"></script>

<!--<script src="js/bootstrap.min.js"></script>-->
<script src="js/main.js"></script>
    <!--<script src=""></script>-->


    <!--Google Maps-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_EJ5uTCnKUyl5VrpAf2Q1lwv7064ZFgc&callback=initMap">
</script>


</body>
</html>

