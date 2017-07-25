<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LaborverwaltungController extends Controller {
   public function index() {
      $labore = DB::select('select * from labore') ;
      return view('laborverwaltung',['labore'=>$labore]) ;
   }
}
