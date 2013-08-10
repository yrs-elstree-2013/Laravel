<?php 
OutputCrimeRating(51.517839151, -0.107607383711); 
function OutputCrimeRating($CurrentLat, $CurrentLong){
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
$amount = 0;
while($row = mysqli_fetch_array($result)){
	$long = $row['Longitude'];
	$lat = $row['Latitude']; 
	if(getDistance($lat, $long, $CurrentLat, $CurrentLong, false) <= 7000){
		if ($row['Crime type'] != "Other crime"){
			$amount++;
		}
	}
}
if($amount <= 10) {
	echo "&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;"; 
} else if($amount <= 15 ){
	echo "&#x2605;&#x2605;&#x2605;&#x2605;";
} else if($amount <= 20 ){
	echo "&#x2605;&#x2605;&#x2605;";
} else if($amount <= 25 ){
	echo "&#x2605;&#x2605;";
} else{
	echo "&#x2605;";
}


mysqli_close($con);
}
?>