<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class LaborHinzufuegenController extends Controller {

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
		$version = DB::select('select * from version where id=1') ;
    return view('laborhinzufuegen', 'version'=>$version);
	}

	public function datenbank(Request $request) {
		$name = $request->input('name');
		$beschreibung = $request->input('beschreibung');
		$ort = $request->input('ort');
		$email = $request->input('email');
		$telefon = $request->input('telefon');
		$website = $request->input('website');
		$biologie = $request->input('biologie');
		$physik = $request->input('physik');
		$chemie = $request->input('chemie');
		$technikinformatik = $request->input('technikinformatik');
		$mathematik = $request->input('mathematik');
		$fachuebergreifend = $request->input('fachuebergreifend');
		DB::insert('insert into labore (name, beschreibung, ort, email, telefon, website, biologie, physik, chemie, technikinformatik, mathematik, fachuebergreifend) values(?,?, ?, ?, ?, ?, ?, ?,?,?,?,?) ',[$name, $beschreibung, $ort, $email, $telefon, $website, $biologie, $physik, $chemie, $technikinformatik, $mathematik, $fachuebergreifend]);
		?><meta http-equiv="refresh" content="0; URL=/public/laborverwaltung"><?php
	}

}
