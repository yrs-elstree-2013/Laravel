<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alexanderchristie
 * Date: 06/08/2013
 * Time: 22:23
 * To change this template use File | Settings | File Templates.
 */

class InformationController extends BaseController {

    public function getIndex() {
        return Redirect::to('info/about');
    }

    public function getAbout() {
        return  View::make('terms', DataFunctions::getSentryData())->with('title', 'About Us')->with("content", 'Coming Soon');
    }

    public function getTos() {
        return View::make('terms', DataFunctions::getSentryData())->with('title', 'Terms & Conditions')->with("content",
        '<h3>Terms & Conditions</h3>
        <p>
        <p> Businesses: </p>
        <p> 1. Only one property may be claimed by each business. </p>
        <p> 2. Each business may only have one donation page at a time. </p>
        <p> 3. This project is not open to established businesses with existing sales properties. </p>
        <p> 4. All rates are non-negotiable and agreed with the local councils. </p>
        <p> 5. You may not negotiate directly with the council for any of the available properties listed on our site. </p>
        <p> 6. Winning businesses are responsible for the upkeep of the property </p>
        </p>
        <br/>');
    }

}