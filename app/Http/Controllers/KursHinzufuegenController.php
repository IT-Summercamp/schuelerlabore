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
		$labore = DB::select('select * from labore') ;
    return view('kurshinzufuegen',['labore'=>$labore]);
	}

	public function datenbank(Request $request) {
		$name = $request->input('name');
		$labor = $request->input('labor');
		$fach = $request->input('fach');
		$primarstufe = $request->input('primarstufe');
		$sek1 = $request->input('sek1');
		$sek2 = $request->input('sek2');
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
		DB::insert('insert into kurse (name, labor, fach, primarstufe, sek1, sek2, beschreibung, zielgruppe, grundschule, foerderschule, oberschule, gymnasium, dauer, zeitraum, kosten, telefon, email, website) values(?, ?, ?, ?, ?, ?,?, ?, ?, ?,?,?,?,?, ?,?,?, ?) ',[$name, $labor, $fach, $primarstufe, $sek1, $sek2, $beschreibung, $zielgruppe, $grundschule, $foerderschule, $oberschule, $gymnasium, $dauer, $zeitraum, $kosten, $telefon, $email, $website]);
		?><meta http-equiv="refresh" content="0; URL=/public/kursverwaltung"><?php
	}

}
