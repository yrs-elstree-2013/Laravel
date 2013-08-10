<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexander
 * Date: 10/08/13
 * Time: 12:18
 * To change this template use File | Settings | File Templates.
 */

class CrimeFunctions {

public static function runPython($path, $args) {
    $result = exec('python ' . app_path().'/controllers/python/'.$path.' ' .$args);
    return json_decode($result, true);
    //return $result;
}

public static function getDistance($lat1, $lng1, $lat2, $lng2 , $miles = false) {

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

public static function OutputCrimeRating($CurrentPostCode){
    $pos = CrimeFunctions::runPython('PostCodesV5.py', $CurrentPostCode);
    $CurrentLat = $pos['lat'];
    $CurrentLong = $pos['lng'];

    $con=mysqli_connect("localhost","yrs","yrs","yrs");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM data");
    $amount = 0;
    while($row = mysqli_fetch_array($result)){
        $long = $row['Longitude'];
        $lat = $row['Latitude'];
        if(CrimeFunctions::getDistance($lat, $long, $CurrentLat, $CurrentLong, false) <= 14){
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


    mysqli_close($con);
}


}