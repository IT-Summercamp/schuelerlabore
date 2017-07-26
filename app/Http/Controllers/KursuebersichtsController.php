<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KursuebersichtsController extends Controller {
   public function index($name) {
      $kurse = DB::select('select * from kurse where labor = ?',[$name]) ;
      return view('kursuebersicht',['kurse'=>$kurse]) ;
   }
}
