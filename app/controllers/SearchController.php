<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alexanderchristie
 * Date: 08/08/2013
 * Time: 10:04
 * To change this template use File | Settings | File Templates.
 */

class SearchController extends BaseController {

    public function getIndex() {
        return View::make('search')->with('isHome', false)->with('title', 'Establish.me Search')->with('results', null)->with('user', Sentry::getUser());
    }

    public function postProperty( ) {
        $query_string = Input::get('query');

		$returnArray = array();				// THIS IS THE ARRAY CONTAINING POSTCODES WITHIN 5KM OF $query_string

			$pos = $this->runPython('PostCodesV5.py', $query_string);
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
				$p = $this->runPython('PostCodesV5.py', $pc);	// Get the lat/long of the postcode
				$dist = $this->distance($pos, $p);		// Get their distance from query postcode
				
				if($dist < 5) {
					array_push($returnArray, $pc);			// THINGS ARE ADDED TO RETURN ARRAY HERE
				}
			}

            return View::make('search')->with('title', 'Search Results')->with('isHome', false)->with('results', $properties)->with('user', Sentry::getUser());

    }

    public function postProject() {
            $query_string = Input::get('query');

            $pos = $this->runPython('PostCodesV5.py', $query_string);
            $projects = Project::all();
            $postcodes = array();

            foreach($projects as $p) {
                $pc = $p->postcode;

                if(in_array($pc, $postcodes)){
                    continue;
                }else {
                    array_push($postcodes, $pc);
                }
            }

            foreach($postcodes as $pc) {
                $p = $this->runPython('PostCodesV5.py', $pc);
                $dist = $this->distance($pos, $p);

                if($dist < 5) {
                    array_push($returnArray, $pc);
                }
            }

            return View::make('search')->with('title', 'Search Results')->with('isHome', false)->with('results', $projects)->with('user', Sentry::getUser());

    }
	
	public function distance($pos, $property, $miles = false)
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

		return $km;
	}

    public function runPython($path, $args)
    {
        $result = exec(app_path().'python/'.$path.' '.$args);
        return json_decode($result);
        //return $result;
    }

}
