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



/* 		location.php  */


