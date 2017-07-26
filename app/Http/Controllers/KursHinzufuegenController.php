<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class KursHinzufuegenController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
    return view('kurshinzufuegen');
	}

	public function datenbank(Request $request) {
		$name = $request->input('name');
		$labor = $request->input('labor');
		$beschreibung = $request->input('beschreibung');
		$zielgruppe = $request->input('zielgruppe');
		$grundschule = $request->input('grundschule');
		$foerderschule = $request->input('foerderschule');
		$oberschule = $request->input('oberschule');
		$gymnasium = $request->input('gymnasium');
		$dauer = $request->input('dauer');
		$zeitraum = $request->input('zeitraum');
		$kosten = $request->input('kosten');
		$telefon = $request->input('telefon');
		$email = $request->input('email');
		$website = $request->input('website');
		DB::insert('insert into kurse (name, labor, beschreibung, zielgruppe, grundschule, foerderschule, oberschule, gymnasium, dauer, zeitraum, kosten, telefon, email, website) values(?, ?, ?, ?, ?, ?,?,?,?,?, ?,?,?, ?) ',[$name, $labor, $beschreibung, $zielgruppe, $grundschule, $foerderschule, $oberschule, $gymnasium, $dauer, $zeitraum, $kosten, $telefon, $email, $website]);
		?><meta http-equiv="refresh" content="0; URL=/public/kursverwaltung"><?php
	}

}
