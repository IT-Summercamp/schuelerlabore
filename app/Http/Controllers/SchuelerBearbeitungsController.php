<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchuelerBearbeitungsController extends Controller {
   public function show() {
     $schueler = DB::select('select * from fuerschueler where id=1') ;
           $version = DB::select('select * from version where id=1') ;
      return view('schuelerbearbeitung',['schueler'=>$schueler, 'version'=>$version]) ;
   }
   public function edit(Request $request) {
    $text = $request->input('text');
      DB::update('update fuerschueler set text = ? where id = 1',[$text]) ;
	  ?><meta http-equiv="refresh" content="0; URL=/public/home"><?php
   }
}
