<?php 
OutputCrimeRating("EX1 1HD"); echo "<br />"; 
OutputCrimeRating("EX4 7BD"); echo "<br />"; 
OutputCrimeRating("EX1 2BU"); echo "<br />";
OutputCrimeRating("EX4 3AN"); echo "<br />"; 
// OutputCrimeRating("WD6 1HL"); echo "<br />";

function runPython($path, $args) {
	$result = exec('python ' . 'C:\xampp\htdocs\app\controllers\python\PostCodesV5.py' . ' '.$args);
	return json_decode($result, true);
	//return $result;
}

function getDistance($lat1, $lng1, $lat2, $lng2 , $miles = false) {
	
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

	return $km;
}

function OutputCrimeRating($CurrentPostCode){
    $pos = runPython('C:\xampp\htdocs\app\controllers\python\PostCodesV5.py', $CurrentPostCode);
	$CurrentLat = $pos['lat'];
	$CurrentLong = $pos['lng'];

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
		if(getDistance($lat, $long, $CurrentLat, $CurrentLong, false) <= 14){
			if ($row['Crime type'] != "Other crime"){
				$amount++;
			}
		}
	}
	if($amount <= 50) {
		echo "&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;"; 
	} else if($amount <= 250 ){
		echo "&#x2605;&#x2605;&#x2605;&#x2605;";
	} else if($amount <= 1300 ){
		echo "&#x2605;&#x2605;&#x2605;";
	} else if($amount <= 1500 ){
		echo "&#x2605;&#x2605;";
	} else{
		echo "&#x2605;";
	} 
	 echo $amount . " " . $CurrentPostCode;


	mysqli_close($con);
}


?>