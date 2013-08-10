<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alexanderchristie
 * Date: 08/08/2013
 * Time: 12:36
 * To change this template use File | Settings | File Templates.
 */

class PropertyController extends BaseController{

    public function getIndex() {

        return Redirect::to('/');

    }

    public function showProperty( $id ) {
        $property = Property::find($id);

        return View::make('property')->with('title', $property->postcode)->with('isHome', false)->with('property', $property)->with('user', Sentry::getUser());
    }




}