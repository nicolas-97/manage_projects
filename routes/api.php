<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    ['prefix' => 'auth'],
    function () {
        Route::post('login','Auth\AuthController@login');
        Route::post('signup','Auth\AuthController@signup');

        Route::group(
            ['middleware' => 'auth:api'],
            function () {
                Route::get('logout', 'Auth\AuthController@logout');
                Route::get('user', 'Auth\AuthController@user');
        });
});

Route::resource('company', 'Company\CompanyController')->only(['index']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('company', 'Company\CompanyController')->only(['show']);
    Route::resource('project', 'Project\ProjectController')->only(['show','store']); //middleware
    Route::resource('backlog', 'Backlog\BacklogController')->only('show'); //middleware
    Route::resource('sprint', 'Sprint\SprintController')->except('index'); //middleware;
    Route::resource('task', 'Task\TaskController')->except('index'); //middleware
});
