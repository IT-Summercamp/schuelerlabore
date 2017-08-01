<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class FilterController extends Controller {

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
	public function index(Request $request)
	{
		$grundschule = $request->input('grundschule');
    $oberschule = $request->input('oberschule');
    $gymnasium = $request->input('gymnasium');
		$foerderschule = $request->input('foerderschule');
    $physik = $request->input('physik');
 		$chemie = $request->input('chemie');
    $mathematik = $request->input('mathematik');
 		$informatik = $request->input('informatik');
 		$biologie = $request->input('biologie');
 		$fachuebergreifend = $request->input('fachuebergreifend');
 		$primarstufe = $request->input('primarstufe');
 		$sek1 = $request->input('sek1');
    $sek2 = $request->input('sek2');

		if ($grundschule == true){
			$wert1 =  DB::select('select * from kurse where grundschule="Ja"') ;

		}
		else
			$wert1 = DB::select('select * from leerkurse where grundschule="Ja"') ;


			if ($oberschule == true){
				$wert2 =  DB::select('select * from kurse where oberschule="Ja"') ;
			}
			else
				$wert2 = DB::select('select * from leerkurse where oberschule="Ja"') ;


		if ($gymnasium == true){
				$wert3 =  DB::select('select * from kurse where gymnasium="Ja"') ;
			}
			else
				$wert3 =  DB::select('select * from leerkurse where gymnasium="Ja"') ;


			if ($foerderschule == true){
				$wert4 =  DB::select('select * from kurse where foerderschule="Ja"') ;
			}
			else
				$wert4 =  DB::select('select * from leerkurse where foerderschule="Ja"') ;


				if ($physik == true){
					$wert5 =  DB::select('select * from kurse where fach="Physik"') ;
				}
				else
					$wert5 =  DB::select('select * from leerkurse where fach="Physik"') ;


					if ($chemie == true){
						$wert6 =  DB::select('select * from kurse where fach="Chemie"') ;
					}
					else
						$wert6 =  DB::select('select * from leerkurse where fach="Chemie"') ;


						if ($mathematik == true){
							$wert7 =  DB::select('select * from kurse where fach="Mathematik"') ;
						}
						else
							$wert7 = DB::select('select * from leerkurse where fach="Mathematik"') ;


							if ($informatik == true){
								$wert8 =  DB::select('select * from kurse where fach="Informatik"') ;
							}
							else
								$wert8 =DB::select('select * from leerkurse where fach="Informatik"') ;


								if ($biologie == true){
									$wert9 =  DB::select('select * from kurse where fach="Biologie"') ;
								}
								else
									$wert9 = DB::select('select * from leerkurse where fach="Biologie"') ;


									if ($fachuebergreifend == true){
										$wert10 =  DB::select('select * from kurse where fach="Fachübergreifend"') ;
									}
									else
										$wert10 = DB::select('select * from leerkurse where fach="Fachuebergreifend"') ;


										if ($primarstufe == true){
											$wert11 =  DB::select('select * from kurse where primarstufe="Ja"') ;
											}
											else
												$wert11 = DB::select('select * from leerkurse where primarstufe="Ja"') ;


											if ($sek1 == true){
												$wert12 =  DB::select('select * from kurse where sek1="Ja"') ;
										 }
										 else
						 					$wert12 = DB::select('select * from leerkurse where sek1="Ja"') ;


												if ($sek2 == true) {
													$wert13 =  DB::select('select * from kurse where sek2="Ja"') ;
												}
												else
													$wert13 = DB::select('select * from leerkurse where sek2="Ja"') ;

$wertuns = array_merge($wert1, $wert2, $wert3, $wert4, $wert5, $wert6, $wert7, $wert8, $wert9, $wert10, $wert11, $wert12, $wert13);
$wert14 = array_unique($wertuns, SORT_REGULAR);
		 return view('suchergebnisse',['wert14'=>$wert14]) ;
	}

}
