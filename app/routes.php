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


Route::get('project/{project_title}', 'ProjectController@showProject');
Route::get('property/{property_title}', 'PropertyController@showProperty');
Route::get('search/{type}/{query}', 'SearchController@search');
Route::get('project', 'ProjectController');
Route::controller('info', 'InformationController');
Route::controller('search', 'SearchController');

Route::group(array('domain' => '{project_title}.establish.dev'), function()
{
    Route::get('/', 'ProjectController@showProject');

});

Route::controller('/', 'HomeController');


