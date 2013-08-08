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
        return Redirect::to('home');
    }

    public function search( $query_type, $query_string ) {



    }

}