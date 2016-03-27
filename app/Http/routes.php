<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return "RESTful API for education management system in SDD term project";
});
 
$app->group([
	'prefix' => '',
	'namespace' => 'App\Http\Controllers'], 
	function($app) {

	// Course
    $app->get('course','CourseController@index');  
    $app->get('course/{id}','CourseController@getCourse');      
    $app->post('course','CourseController@createCourse');      
    $app->put('course/{id}','CourseController@updateCourse');      
    $app->delete('course/{id}','CourseController@deleteCourse');

    // insert next api 


});