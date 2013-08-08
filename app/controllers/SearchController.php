<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alexanderchristie
 * Date: 08/08/2013
 * Time: 10:04
 * To change this template use File | Settings | File Templates.
 */
//include app_path().'/lib/python/PythonLoad.php';

class SearchController extends BaseController {

    public function getIndex() {
        return View::make('search')->with('isHome', false)->with('title', 'Establish.me Search');
    }

    public function search( $query_type, $query_string ) {
		if(!is_string($query_type)) {
			return Redirect::to('search');
		}
		
		$python = new PythonLoad();
		
		$returnArray = array();				// THIS IS THE ARRAY CONTAINING POSTCODES WITHIN 5KM OF $query_string
		
		if($query_type == 'property') {
			$pos = $python.RunPython('PostCodesV5.py', $query_string);
        	$properties = Property::all();
			$postcodes = array();
			
			foreach($properties as $p) { // Go through each property
				$pc = $p->postcode;
				
				if(in_array($pc, $postcodes)){ // If postcode already in array
					continue;
				}else {
					array_push($postcodes, $pc);	// Add the postcode to the array if it isn't already there
				}
			}
			
			foreach($postcodes as $pc) {	// Go through postcodes
				$p = $python('PostCodesV5.py', $pc);	// Get the lat/long of the postcode
				$dist = distance($pos, $p);		// Get their distance from query postcode
				
				if($dist < 5) {
					array_push($returnArray, $pc);			// THINGS ARE ADDED TO RETURN ARRAY HERE
				}
			}
			
			if(empty($returnArray) {
				return "null";
			}
			
            return View::make('search')->with('title', 'Search Results')->with('isHome', false)->with('results', $returnArray);
		}else if($query_type == 'project') {
			// TODO: Project search logic
		}else {
			return Redirect::to('search');
		}
    }
	
	private function distance($pos, $property, $miles = false)
	{
		$lat1 = $pos['lat'];
		$lng1 = $pos['lng'];
		
		$lat2 = $property['lat']; // Property's location
		$lng2 = $property['lng']; // Property's location
		
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


}