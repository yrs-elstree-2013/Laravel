<?php
function getDistance($lat1, $lng1, $lat2, $lng2, $miles = true){
	$pi80 = M_PI / 180;
	$lat1 *= $pi80;
	$lng1 *= $pi80;
	$lat2 *= $pi80;
	$lng2 *= $pi80;
	 
	$r = 6372.797; // mean radius of Earth in km
	$dlat = $lat2 - $lat1;
	$dlng = $lng2 - $lng1;
	$a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlng / 2) * sin($dlng / 2);
	$c = 2 * atan2(sqrt($a), sqrt(1 - $a));
	$km = $r * $c;
	 
	return ($miles ? ($km * 0.621371192) : $km);
}
$con=mysqli_connect("localhost","root","","yrs");
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM data");

while($row = mysqli_fetch_array($result)){
	$long = $row['Longitude'];
	$lat = $row['Latitude'];
	if(getDistance($lat, $long, -0.106453448135, 51.518207207, false) <= 7000){
		echo $row['Month'] . " " . $row['Crime type'];
		echo "<br />";
	}
}

mysqli_close($con);
?>