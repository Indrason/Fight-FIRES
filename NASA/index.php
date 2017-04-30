<!DOCTYPE html>
<html>
<head>
	<title>Fire Emergency</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript">
		$(document).ready(function() {
			$("#lti").hide();
			$("#longi").hide();
			$("#tym").hide();
			$("#emer").hide();	
			$("#next").click(function() {
				$("#emer").show();
				$("#data").hide();
			});		
		});	

		function check_data (f1) {
			var no = f1.length;
			var s1 = document.getElementById("sm").checked;
			var s2 = document.getElementById("sf").checked;
			var lat;
			var lon;

		/*	for(var i = 0; i < no-7; i++) {
				if(i == 2){
					i += 2;
				}
				if(s1 == true || s2 == true) {
					alert("Please complete filling the form");
				}
				if(f1.elements[i].value == "") {
					alert("Please complete filling the form");
					f1.elements[i].focus();
					break;
				}
			}*/

			if (navigator.geolocation) {
		        navigator.geolocation.getCurrentPosition(showPosition, showError);
		    }

			function showPosition(position) {
			    lat = position.coords.latitude;
			    lon = position.coords.longitude;
			}
			alert(lat);
			alert(lon);
			function showError () {
				alert("map not display");
			}
			
			document.getElementById("lti").value = lat;
			document.getElementById("longi").value = lon;
			document.getElementById("tym").value = new Date();

			return false;
		}	
	</script>
</head>
<body>
<h1>Fire Emergency</h1>
<div id="data">
	<form name="detail" method="post" action="location.php">
		<input type="text" name="name" placeholder="Full Name"> <br />
		<input type="text" name="fname" placeholder="Father's Name"><br />
		<input type="radio" name="sex" id="sm" value="male"> Male 
		<input type="radio" name="sex" id="sf" value="female"> Female <br/>
		<input type="text" name="add1" placeholder="Address Line 1" ><br />
		<input type="text" name="add2" placeholder="Address Line 2"><br />
		<input type="text" name="pin" placeholder="Zip code"> <br />
		<input type="text" name="ps" placeholder="Police Station"><br />
		<input type="text" name="po" placeholder="Post Office"> <br />
		<input type="text" id="lti" name="lati" placeholder="Latitude"><br />
		<input type="text" id="longi" name="long" placeholder="Longitude"><br />
		<input type="text" id="tym" name="time" placeholder="Time"><br/>
		<button type="submit" id="next" onclick="return check_data(this.form)">Submit</button>
		<button type="reset">Reset</button>
	
</div>

<div id="emer">
	<center><button type="submit" id="emer_but">Click here in Emergency</button></center>
</div>
	</form>
</body>
</html>