<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LaborBearbeitungsController extends Controller {
   public function show($name) {
     $labore = DB::select('select * from labore where name = ?',[$name]) ;
      return view('laborbearbeitung',['labore'=>$labore]) ;
   }
   public function edit(Request $request,$name) {
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
      DB::update('update labore set name = ? where name = ?',[$name,$name]) ;
      DB::update('update labore set beschreibung = ? where name = ?',[$beschreibung,$name]) ;
	  DB::update('update labore set ort = ? where name = ?',[$ort,$name]) ;
    DB::update('update labore set email = ? where name = ?',[$email,$name]) ;
	  DB::update('update labore set telefon = ? where name = ?',[$telefon,$name]) ;
    DB::update('update labore set website = ? where name = ?',[$website,$name]) ;
    DB::update('update labore set biologie = ? where name = ?',[$biologie,$name]) ;
    DB::update('update labore set physik = ? where name = ?',[$physik,$name]) ;
    DB::update('update labore set chemie = ? where name = ?',[$chemie,$name]) ;
    DB::update('update labore set technikinformatik = ? where name = ?',[$technikinformatik,$name]) ;
    DB::update('update labore set mathematik = ? where name = ?',[$mathematik,$name]) ;
    DB::update('update labore set fachuebergreifend = ? where name = ?',[$fachuebergreifend,$name]) ;
	  ?><meta http-equiv="refresh" content="0; URL=/public/laborverwaltung"><?php
   }
}
