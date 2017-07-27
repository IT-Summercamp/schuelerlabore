<?php namespace App\Http\Controllers;

use DB;

class SchuelerController extends Controller {

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
		$schueler = DB::select('select * from fuerschueler where id=1') ;
		return view('schueler',['schueler'=>$schueler]);
	}

}
