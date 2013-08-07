<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alexanderchristie
 * Date: 07/08/2013
 * Time: 13:19
 * To change this template use File | Settings | File Templates.
 */

class ProjectController extends BaseController {

    public function getIndex() {

        return Redirect::to('/');

    }

    public function showProject( $project_title ) {
        $project = Project::where('title', '=', $project_title)->get();
        return View::make('project')->with('title', $project_title)->with('isHome', false);
    }




}