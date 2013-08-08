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
        return  View::make('article')->with('isHome', false)->with('title', 'About Us')->with("content", 'Establish.Me is an ambitious project that aims to unite local councils, residents and locally based new businesses; and enable them take advantage of the ever growing number of empty shop spaces in our high streets.<br /><br />
With the cooperation of councils, Establish.Me will give new start ups the chance to create a "Project Page" on the site which will allow them to pitch their business to their local community. In turn, the community may donate towards the business. These donations go towards paying for a 3-6 month period of rent for a disused shop front in the local high street.
<br /><br />
The idea is that councils get businesses into empty properties they maybe struggling to fill. Meanwhile, local businesses have a chance to establish themselves within the community, and local residents can have a say on the type of companies they would like to have in their high street.
<br /><br />
The site also makes use of open data to provide both traders and investors with information about other businesses in the area and known crime rates, with both statistical and visual data.
<br /><br />');
    }

    public function getTos() {
        return View::make('article')->with('isHome', false)->with('title', 'Terms & Conditions')->with("content", '
        <h3>Terms of Service for Businesses</h3>
        <p>1. Only one property may be claimed by each business.</p>
        <p>2. Each business may only have one donation page at a time.</p>
        <p>3. This project is not open to established businesses with existing sales properties.</p>
        <p>4. All rates are non-negotiable and agreed with the local councils.</p>
        <p>5. You may not negotiate directly with the council for any of the available properties listed on our site.</p>
        <p>6. Winning businesses are responsible for the upkeep of the property</p>
        <h3>Terms of Service for Users:</h3>
        <p>1. Users agree to provide their payment information at the time they pledge to a business</p>
        <p>2. Users must ensure they have sufficient funds available at the end of the bid so that their donation can be collected.</p>
        <p>3. Service available to individuals who are at least 18 years of age</p>
        <br/>');
    }

    public function getPrivacypolicy() {
        return  View::make('article')->with('isHome', false)->with('title', 'Privacy')->with("content", 'We care about your welfare. Therefore, we have made a Privacy Policy page explaining what happens with your data that is collected from you on this website.<br />
How we use the data provided by you: <br /><br /> We will only use data provided by you to improve your experience on our website. We will not hand-over data provided by you to third parties.');
    }


}