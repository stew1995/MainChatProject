<!DOCTYPE html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 28/07/2017
 * Time: 18:53
 */
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="css/main.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>




<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">BandArt</a>
        </div>
        <form class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon"></span>My Profile</a></li>
        </ul>
    </div>
</nav>
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
<script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
    <script src=""></script>


    <!--Google Maps-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_EJ5uTCnKUyl5VrpAf2Q1lwv7064ZFgc&callback=initMap">
</script>


</body>
</html>

