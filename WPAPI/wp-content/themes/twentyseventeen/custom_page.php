<?php
/*
*Template Name: My Custom Page
*Description: A darker page template
*/
?>

<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Showing a Map</title>
    <h1>Random Page</h1>
    <style>
      
      h1 {
	color: blue;
	}

      #map {
        height: 300px;
	width: 600px;
	margin: auto;
	top: 100px;
      }

     body {
        background-color: black;
      }
    </style>
  </head>

  <body>
    <div id="map"></div>

    <script>

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(59.413109, 82.324436),
          zoom: 3
        });
        var infoWindow = new google.maps.InfoWindow;

          downloadUrl('http://localhost/wordpress/wp-content/themes/twentyseventeen/phpsqlajax_getxml.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('random');
            Array.prototype.forEach.call(markers, function(markerElem) {

              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              infowincontent.appendChild(text);
              var marker = new google.maps.Marker({
                map: map,
                position: point,
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOZcbBO9CM8lTaLBdSzyxl3mpxjjmOqVw&callback=initMap">
    </script>
  </body>
</html>
