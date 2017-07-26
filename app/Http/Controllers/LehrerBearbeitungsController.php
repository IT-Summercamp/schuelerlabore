<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LehrerBearbeitungsController extends Controller {
   public function show() {
     $lehrer = DB::select('select * from fuerlehrer where id=1') ;
      return view('lehrerbearbeitung',['lehrer'=>$lehrer]) ;
   }
   public function edit(Request $request) {
    $text = $request->input('text');
      DB::update('update fuerlehrer set text = ? where id = 1',[$text]) ;
	  ?><meta http-equiv="refresh" content="0; URL=/public/home"><?php
   }
}
