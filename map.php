<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
dbLogin(); 
?>
<!DOCTYPE html>
<html>
  <head>
  <title>Map</title>
    <style type="text/css">
      html, body, #map-canvas { height: 100vh ; margin: 0; padding: 0;}
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB20xstnZRYd5qdOWBPpIUva_LlI-C378w">
    </script>
    <script type="text/javascript">
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see a blank space instead of the map, this
// is probably because you have denied permission for location sharing.
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var mapOptions = {
    zoom: 12
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
  directionsDisplay.setMap(map);

  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Your Position'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }

    <?php
$index = 0;
$query = "SELECT * FROM dbccema WHERE state=1";
$result = mysql_query($query);
 while ($row = mysql_fetch_array($result)){
    $index++;
  $format = "var marker = new google.maps.Marker({
     position: new google.maps.LatLng(%f,%f),
       map: map,
     title: '%s'
   });";
  $data = sprintf($format, $row['lat'], $row['long'], $row['city']);
  echo $data;
 }
  ?>
  var marker = new google.maps.Marker({
      position: new google.maps.LatLng(44.82938,-837325323),
      map: map,
      title: 'name'
  });
}
function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}


google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
<div id="map-canvas" style="float:left;width:100%"></div>
  </body>
</html>