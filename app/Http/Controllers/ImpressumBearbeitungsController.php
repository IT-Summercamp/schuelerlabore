<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImpressumBearbeitungsController extends Controller {
   public function show() {
     $impressum = DB::select('select * from impressum where id=1') ;
     $version = DB::select('select * from version where id=1') ;
      return view('impressumbearbeitung',['impressum'=>$impressum,'version'=>$version]) ;
   }
   public function edit(Request $request) {
    $name = $request->input('name');
    $strasse = $request->input('strasse');
    $plz = $request->input('plz');
    $ort = $request->input('ort');
    $telefon = $request->input('telefon');
    $email = $request->input('email');
      DB::update('update impressum set name = ? where id = 1',[$name]) ;
      DB::update('update impressum set strasse = ? where id = 1',[$strasse]) ;
      DB::update('update impressum set plz = ? where id = 1',[$plz]) ;
      DB::update('update impressum set ort = ? where id = 1',[$ort]) ;
      DB::update('update impressum set telefon = ? where id = 1',[$telefon]) ;
      DB::update('update impressum set email = ? where id = 1',[$email]) ;
	  ?><meta http-equiv="refresh" content="0; URL=/public/home"><?php
   }
}
