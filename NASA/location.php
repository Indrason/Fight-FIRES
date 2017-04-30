<!DOCTYPE html>
<html>
<head>
	<title>Help Location</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style type="text/css">
		body {
			background-color: #ff8080;
		}
		#map {
			text-align: center;
			width: 97%;
			height: 500px;
			padding: 10px;
		}
		#result {
			text-align: center;
		}
	</style>
	
</head>
<body>
	<h1>Fire Emergency Help</h1>
	
	<?php
		$l1 = $_POST["lati"];
		$l2 = $_POST["long"];
		$t = $_POST["time"];
		
	?>

	<div id="result">
		Name: <?php echo $_POST["name"]; ?> <br />
		Father's Name: <?php echo $_POST["fname"]; ?> <br />
		Sex: <?php echo $_POST["sex"]; ?> <br />
		Address Line 1: <?php echo $_POST["add1"]; ?> <br />
		Address Line 2: <?php echo $_POST["add2"]; ?> <br />
		Zip Code: <?php echo $_POST["pin"]; ?> <br />
		Police Station: <?php echo $_POST["ps"]; ?> <br />
		Post Office: <?php echo $_POST["po"]; ?> <br />
		Location Details: <br />
		Latitude: <?php echo $_POST["lati"]; ?> <br />
		Longitude: <?php echo $_POST["long"]; ?> <br />
		Time: <?php echo $_POST["time"]; ?>
	</div><br /><br /><br />
	<div id="map"></div>

	<p id="map_detail">;

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL38qWyBhURo_Zx7B2Wpu3p9T0xSDGhkY"></script>
	
	<script type="text/javascript">
		var x1 = "<?php echo $l1; ?>";
		var y1 = "<?php echo $l2; ?>";
		myMap(x1,y1);

		var a,b;

		function myMap(a,b) {
		  var myCenter = new google.maps.LatLng(a,b);
		  var mapCanvas = document.getElementById("map");
		  var mapOptions = {center: myCenter, zoom: 5};
		  var map = new google.maps.Map(mapCanvas, mapOptions);
		  var marker = new google.maps.Marker({position:myCenter});
		  marker.setMap(map);

		  var circle = new google.maps.Circle({
		  map: map,
		  radius: 160,    
		  fillColor: '#AA0000'
		});
		circle.bindTo('center', marker, 'position');

		var circle2 = new google.maps.Circle({
		  map: map,
		  radius: 200,    
		  fillColor: '#5cd65c'
		});
		circle2.bindTo('center', marker, 'position');

		}
	</script>
	</p>

	
</body>
</html>