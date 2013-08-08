<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alexanderchristie
 * Date: 08/08/2013
 * Time: 12:36
 * To change this template use File | Settings | File Templates.
 */

class PropertyController {

    public function getIndex() {

        return Redirect::to('/');

    }

    public function showProperty( $property_title ) {
        $project = Project::where('title', '=', $project_title);
        return View::make('project')->with('title', $project_title)->with('isHome', false)->where('project', $project);
    }



}