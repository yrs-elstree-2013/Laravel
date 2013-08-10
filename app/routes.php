<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('project/show/{id}', 'ProjectController@showProject');
Route::get('property/show/{id}', 'PropertyController@showProperty');
Route::get('project/create/{id}', 'ProjectController@getCreate');
Route::controller('project', 'ProjectController');
Route::controller('property', 'PropertyController');
Route::controller('info', 'InformationController');
Route::controller('search', 'SearchController');
Route::controller('user', 'UserController');

Route::group(array('domain' => '{project_title}.establish.dev'), function()
{

    Route::get('/', function($project_title)
    {
        return Redirect::action('ProjectController@showProject', $project_title);
    });

});

Route::controller('/', 'HomeController');


