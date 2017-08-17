//Google Maps
function initMap() {
    var portsmouth = {lat: 50.8185466, lng: -1.1678308};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
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

    //SQL AND PHP
    downloadURL('php/mapStoarge.php', function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');
        Array.prototype.forEach.call(markers, function(markerElem) {
            var id = markerElem.getAttribute('id');
            var name = markerElem.getAttribute('name');
            var address = markerElem.getAttribute('address');
            var type = markerElem.getAttribute('type');
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));

            var infowincontent = document.createElement('div');
            var strong = document.createElement('strong');
            strong.textContent = name
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

            var text = document.createElement('text');
            text.textContent = address
            infowincontent.appendChild(text);
            var icon = customLabel[type] || {};
            var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
            });
            marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
            });
        });
    });

}

function handleLocationError(browerHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
}

function downloadURL(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = "";
            callback(request, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}