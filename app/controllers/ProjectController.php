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

    public function getShow( ) {
        $project_name = Input::get('name');
        $project = Project::where('weblink', '=', $project_name);
        return View::make('project')
            ->with('title', $project->title)
            ->with('isHome', false)
            ->with('project', $project)
            ->with('user', Sentry::getUser());
    }

    public function getCreate($id) {

        if ( Sentry::check() ) {
            $projects = Project::where('ownerid', "=", Sentry::getUser()->id);
            if ( empty( $projects ) ) {

                //return View::make('errorpage'); // Sorry only one project per account at this point
                return 'Only one per account';

            } else {

                return View::make('createProject')
                    ->with('title', 'Create Project')
                    ->with('isHome', false)
                    ->with('user', Sentry::getUser())
                    ->with('property', Property::find($id) );
            }
        } else {
            return Redirect::to('user/signup');
        }


    }

    public function showProject( $project_title ) {
        return View::make('project')
            ->with('title', 'Project')
            ->with('isHome', false)
            ->with('project', Project::find(1))
            ->with('user', Sentry::getUser());

    }


    public function postCreate() {
        $new_project = new Project();
        $new_project->weblink = Input::get('weblink');
        $new_project->title = Input::get('title');
        $new_project->slogan = Input::get('slogan');
        $new_project->description = Input::get('description');
        $new_project->target = Input::get('target');
        $new_project->progress = Input::get('private_funding');
        $new_project->ownerid = Sentry::getUser()->id;
        $new_project->website = Input::get('website');
        $new_project->legalname = Input::get('trading_name');

        $new_project->save();

        return Redirect::to('project/show/?name="' . $new_project->weblink . '"' );
    }

}