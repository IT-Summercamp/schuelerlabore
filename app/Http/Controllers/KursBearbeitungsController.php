<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KursBearbeitungsController extends Controller {
   public function show($name) {
     $kurs = DB::select('select * from kurse where name = ?',[$name]) ;
     $labore = DB::select('select * from labore') ;
     $version = DB::select('select * from version where id=1') ;
      return view('kursbearbeitung',['kurs'=>$kurs, 'labore'=>$labore,'version'=>$version]) ;
   }
   public function edit(Request $request,$name) {
    $name = $request->input('name');
    $labor = $request->input('labor');
    $fach = $request->input('fach');
    $primarstufe = $request->input('primarstufe');
		$sek1 = $request->input('sek1');
		$sek2 = $request->input('sek2');
    $beschreibung = $request->input('beschreibung');
 		$zielgruppe = $request->input('zielgruppe');
    $grundschule = $request->input('grundschule');
 		$foerderschule= $request->input('foerderschule');
 		$oberschule = $request->input('oberschule');
 		$gymnasium = $request->input('gymnasium');
 		$dauer = $request->input('dauer');
 		$zeitraum = $request->input('zeitraum');
    $kosten = $request->input('kosten');
 		$email = $request->input('email');
 		$telefon = $request->input('telefon');
 		$website = $request->input('website');
      DB::update('update kurse set name = ? where name = ?',[$name,$name]) ;
      DB::update('update kurse set labor = ? where name = ?',[$labor,$name]) ;
      DB::update('update kurse set fach = ? where name = ?',[$fach,$name]) ;
      DB::update('update kurse set primarstufe = ? where name = ?',[$primarstufe,$name]) ;
      DB::update('update kurse set sek1 = ? where name = ?',[$sek1,$name]) ;
      DB::update('update kurse set sek2 = ? where name = ?',[$sek2,$name]) ;
      DB::update('update kurse set beschreibung = ? where name = ?',[$beschreibung,$name]) ;
	  DB::update('update kurse set zielgruppe = ? where name = ?',[$zielgruppe,$name]) ;
    DB::update('update kurse set grundschule = ? where name = ?',[$grundschule,$name]) ;
    DB::update('update kurse set foerderschule = ? where name = ?',[$foerderschule,$name]) ;
    DB::update('update kurse set oberschule = ? where name = ?',[$oberschule,$name]) ;
    DB::update('update kurse set gymnasium = ? where name = ?',[$gymnasium,$name]) ;
    DB::update('update kurse set dauer = ? where name = ?',[$dauer,$name]) ;
    DB::update('update kurse set zeitraum = ? where name = ?',[$zeitraum,$name]) ;
    DB::update('update kurse set kosten = ? where name = ?',[$kosten,$name]) ;
    DB::update('update kurse set email = ? where name = ?',[$email,$name]) ;
	  DB::update('update kurse set telefon = ? where name = ?',[$telefon,$name]) ;
    DB::update('update kurse set website = ? where name = ?',[$website,$name]) ;
	  ?><meta http-equiv="refresh" content="0; URL=/public/kursverwaltung"><?php
   }
}
