<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1/', 'middleware' => ['api']], function () {
        Route::post('user/signup', 'Api\v1\AuthenticationController@signup');
        Route::post('user/login', 'Api\v1\AuthenticationController@authenticate');
});

Route::auth();

Route::get('/home', 'HomeController@index');
