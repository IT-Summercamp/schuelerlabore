<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BenutzerverwaltungController extends Controller {
   public function index() {
      $users = DB::select('select * from users') ;
      $version = DB::select('select * from version where id=1') ;
      return view('benutzerverwaltung',['users'=>$users, 'version'=>$version]) ;
   }
}
