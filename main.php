<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 28/07/2017
 * Time: 18:53
 */
session_start();
if(!isset($_SESSION['user_session'])) {
    header("Location:index.html");
}

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

    <link rel="stylesheet" href="css/main.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div>
    <strong>Hello <?php echo $_SESSION['user_session']; ?></strong>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>

    <!-- Tab panes
    TODO:Use this to hide different types of the application -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">...</div>
        <div role="tabpanel" class="tab-pane" id="profile">Hello</div>
        <div role="tabpanel" class="tab-pane" id="messages">...</div>
        <div role="tabpanel" class="tab-pane" id="settings">...</div>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<script src="js/main.js"></script>
    <!--<script src=""></script>-->


    <!--Google Maps-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_EJ5uTCnKUyl5VrpAf2Q1lwv7064ZFgc&callback=initMap">
</script>


</body>
</html>

