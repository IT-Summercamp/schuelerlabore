<?php namespace App\Http\Controllers;

use DB;

class LehrerController extends Controller {

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
		$lehrer = DB::select('select * from fuerlehrer where id=1') ;
		return view('lehrer',['lehrer'=>$lehrer]);
	}

}
