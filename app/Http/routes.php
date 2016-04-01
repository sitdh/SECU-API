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

	/**
     * Routes for resource course
     */
    $app->get('course','CourseController@all');
    $app->get('course/{id}','CourseController@get');
    $app->post('course','CourseController@add');
    $app->put('course/{id}','CourseController@put');
    $app->delete('course/{id}','CourseController@remove');

    /**
     * Routes for resource offering-course
     */
    $app->get('offering-course', 'OfferingCoursesController@all');
    $app->get('offering-course/{id}', 'OfferingCoursesController@get');
    $app->post('offering-course', 'OfferingCoursesController@add');
    $app->put('offering-course/{id}', 'OfferingCoursesController@put');
    $app->delete('offering-course/{id}', 'OfferingCoursesController@remove');

    /**
     * Routes for resource assignment-project
     */
    $app->get('assignment-project', 'AssignmentProjectsController@all');
    $app->get('assignment-project/{id}', 'AssignmentProjectsController@get');
    $app->post('assignment-project', 'AssignmentProjectsController@add');
    $app->put('assignment-project/{id}', 'AssignmentProjectsController@put');
    $app->delete('assignment-project/{id}', 'AssignmentProjectsController@remove');

    /**
     * Routes for resource assignment
     */
    $app->get('assignment', 'AssignmentsController@all');
    $app->get('assignment/{id}', 'AssignmentsController@get');
    $app->post('assignment', 'AssignmentsController@add');
    $app->put('assignment/{id}', 'AssignmentsController@put');
    $app->delete('assignment/{id}', 'AssignmentsController@remove');

    /**
     * Routes for resource group-workshop
     */
    $app->get('group-workshop', 'GroupWorkshopsController@all');
    $app->get('group-workshop/{id}', 'GroupWorkshopsController@get');
    $app->post('group-workshop', 'GroupWorkshopsController@add');
    $app->put('group-workshop/{id}', 'GroupWorkshopsController@put');
    $app->delete('group-workshop/{id}', 'GroupWorkshopsController@remove');

    /**
     * Routes for resource options
     */
    $app->get('options', 'OptionsController@all');
    $app->get('options/{id}', 'OptionsController@get');
    $app->post('options', 'OptionsController@add');
    $app->put('options/{id}', 'OptionsController@put');
    $app->delete('options/{id}', 'OptionsController@remove');

    /**
     * Routes for resource test-history
     */
    $app->get('test-history', 'TestHistoriesController@all');
    $app->get('test-history/{id}', 'TestHistoriesController@get');
    $app->post('test-history', 'TestHistoriesController@add');
    $app->put('test-history/{id}', 'TestHistoriesController@put');
    $app->delete('test-history/{id}', 'TestHistoriesController@remove');

    /**
     * Routes for resource userGroup
     */
    $app->get('user-group', 'UserGroupController@all');
    $app->get('user-group/{id}', 'UserGroupController@get');
    $app->post('user-group', 'UserGroupController@add');
    $app->put('user-group/{id}', 'UserGroupController@put');
    $app->delete('user-group/{id}', 'UserGroupController@remove');
    /**
     * Routes for resource CourseEnroll
     */
    $app->get('course-enroll', 'CourseEnrollController@all');
    $app->get('course-enroll/{id}', 'CourseEnrollController@get');
    $app->post('course-enroll', 'CourseEnrollController@add');
    $app->put('course-enroll/{id}', 'CourseEnrollController@put');
    $app->delete('course-enroll/{id}', 'CourseEnrollController@remove');
    /**
     * Routes for resource StudyingResult
     */
    $app->get('studying-result', 'StudyingResultController@all');
    $app->get('studying-result/{id}', 'StudyingResultController@get');
    $app->post('studying-result', 'StudyingResultController@add');
    $app->put('studying-result/{id}', 'StudyingResultController@put');
    $app->delete('studying-result/{id}', 'StudyingResultController@remove');


});
