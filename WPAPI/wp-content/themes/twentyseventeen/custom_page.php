<?php
/*
*Template Name: My Custom Page
*Description: A darker page template
*/
?>

<html>
	<head>
	   <style>
	      #map {
		width: 100%;
		height: 500px;
	      }
	   </style>
	</head>
	<body>
		 <h2>Experiment Visual</h2>
		 <div id="map"></div>
		 <script>
			function initMap() {
			  var point = {lat: 42.648990, lng: 23.267420};
			  var map = new google.maps.Map(document.getElementById('map'), {
			   zoom: 4
			   center: point
			  });
			  var marker = new google.maps.Marker({
			   position: point,  
			   map: map
			  });
			}
		</script>
		<script async defer
		src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyC82WO1alaCqFYHEP0xMy58Uv9BMafJ1nc&callback=initMap">
		</script>
	</body>
</html>
