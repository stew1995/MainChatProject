/**
 * Created by stewart on 29/07/2017.
 */
$("#fileUpload").hide();



$(document).ready(function() {
    $("#body").load("php/pages/chat.html");
    $("#fileUploadButton").click(function(event) {
        $("#fileUpload").click();
       /*Doesnt work, scroll needs to be at the bottom
        var div = $("#chatWindow");
        var height = div[0].scrollHeight;
        div.scrollTop(height);
         */

    });

    setInterval(function() {
        $("#chatWindow").load('php/readMessages.php');
    }, 5000);
});


function sendMessageToAjax() {
    var message = $("#messageInput").val();
    var user = "Stewart";
    var img = $("#fileUpload").val();
    if(img =="") {
        //alert("empty");
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
    //if message is empty an user just wants to send img
    $.ajax({
        type:'post',
        url: 'php/sendMessage.php',
        data: {
            image:"image",
            message:message,
            userid:user,
            imgName:img
        },
        success: function (response) {
            //Remove data from field
            $("#messageInput").val("");

        }
    });

}
    return false;

}

// delay


$('#searchbar').keyup(function() {
    var term = $("#searchbar").val();
    if(term != "") {
        var URL = encodeURI("php/search.php?q=" + term);
        $.ajax({
            url: URL,
            type: "GET",
            success: function (response) {
                $("#livesearch").html(response);
            }
        });
    } else {
        //empty text field
    }
})

//Tabs + AJAX
$('#a').click(function (e) {
    $("#body").load("php/pages/chat.html");
});
$('#b').click(function (e) {
    $("#body").load("php/pages/calender.php");
});
$('#c').click(function (e) {
    $("#body").load("map.php");
});






































