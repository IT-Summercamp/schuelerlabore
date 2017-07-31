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
Route::get('schueler', 'SchuelerController@index');
Route::get('aktuelleveranstaltungen', 'VeranstaltungenController@index');
Route::post('filter', 'FilterController@index');
Route::get('impressum', 'ImpressumController@index');
#BenutzerController
Route::get('benutzerverwaltung', 'BenutzerverwaltungController@index');
		Route::get('benutzerhinzufügen', 'Labore@index');
		Route::get('benutzerbearbeiten/{id}', 'BenutzerBearbeitungsController@show');
		Route::post('benutzerbearbeiten/{id}', 'BenutzerBearbeitungsController@edit');
		Route::get('benutzerentfernen/{id}', 'BenutzerEntfernungsController@index');

#LaborController
Route::get('laborverwaltung', 'LaborverwaltungController@index');
		Route::get('laborhinzufuegen', 'LaborHinzufuegenController@index');
		Route::post('laborhinzufuegen', 'LaborHinzufuegenController@datenbank');
		Route::get('laborbearbeiten/{id}', 'LaborBearbeitungsController@show');
		Route::post('laborbearbeiten/{id}', 'LaborBearbeitungsController@edit');
		Route::get('laborentfernen/{id}', 'LaborEntfernungsController@index');

#KursController
Route::get('kursverwaltung', 'KursverwaltungController@index');
Route::get('kursuebersicht/{name}', 'KursuebersichtsController@index');
		Route::get('kursentfernen/{id}', 'KursEntfernungsController@index');
		Route::get('kurshinzufuegen', 'KursHinzufuegenController@index');
		Route::post('kurshinzufuegen', 'KursHinzufuegenController@datenbank');
		Route::get('kursbearbeiten/{id}', 'KursBearbeitungsController@show');
		Route::post('kursbearbeiten/{id}', 'KursBearbeitungsController@edit');

#SeitenController
Route::get('bearbeitunglehrer', 'LehrerBearbeitungsController@show');
Route::post('bearbeitunglehrer', 'LehrerBearbeitungsController@edit');
Route::get('bearbeitungimpressum', 'ImpressumBearbeitungsController@show');
Route::post('bearbeitungimpressum', 'ImpressumBearbeitungsController@edit');
Route::get('bearbeitungschueler', 'SchuelerBearbeitungsController@show');
Route::post('bearbeitungschueler', 'SchuelerBearbeitungsController@edit');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
		Route::get('messageentfernen/{id}', 'MessagesController@entfernen');
});
