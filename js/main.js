/**
 * Created by stewart on 29/07/2017.
 */
$("#fileUpload").hide();


$(document).ready(function() {
    $("#fileUploadButton").click(function(event) {
        $("#fileUpload").click();

    });
    $("#chatWindow").load('php/readMessages.php');


});

//Google Maps
function initMap() {
    var portsmouth = {lat: 50.8185466, lng: -1.1678308};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: portsmouth
    });
    var marker = new google.maps.Marker({
        position: portsmouth,
        map: map
    });

    infoWindow = new google.maps.InfoWindow;

    //Locations
    //TODO: LOcation shows in london not my location
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            //The logation in lat and lng
            var pos =  {
                lat: position.coords.latitude,
                lng: position.coords.longitude
        };
            //Info window
            infoWindow.setPosition(pos);
            infoWindow.setContent("Location");
            infoWindow.open(map);
            map.setCenter(pos);
        }, function () {
            //Error
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        //Doesnt support
        handleLocationError(false, infoWindow, map.getCenter());
    }
}

function handleLocationError(browerHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
}

function sendMessageToAjax() {
    var message = $("#messageInput").val();
    var user = "Stewart";
    var img = $("#fileUpload").val();
    if(img =="") {
        alert("empty");
        if(message != "") {
            //Loading spinner to go here if used
            $.ajax({
                type:'post',
                url: 'php/sendMessage.php',
                data: {
                    noimage:"noimage",
                    message:message,
                    userid:user
                },
                success: function (response) {
                    //Remove data from field
                    $("#messageInput").val("");
                }
            });
        } else {
            alert("Fill in all details");
        }
    } else {
        if(message != "") {

            $.ajax({
                type:'post',
                url: 'php/sendMessage.php',
                data: {
                    imagewithtext:"imagewithtext",
                    message:message,
                    userid:user
                },
                success: function (response) {
                    //Remove data from field
                    $("#messageInput").val("");
                }
            });
        }
    } if(message ==""){
                //if message is empty an user just wants to send img
                $.ajax({
                    type:'post',
                    url: 'php/sendMessage.php',
                    data: {
                        image:"image",
                        message:message,
                        userid:user
                    },
                    success: function (response) {
                        //Remove data from field
                        $("#messageInput").val("");
                    }
                });

            }
    return true;



}











































