<!--
Copyright (c) 2017 by Sven Liebert. All Rights Reserved.
 -->

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
use App\User;

#MainController
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('schuelerlabore', 'LaborController@index');
Route::get('lehrer', 'LehrerController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
