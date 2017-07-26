<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BenutzerBearbeitungsController extends Controller {
   public function show($id) {
     $users = DB::select('select * from users where id = ?',[$id]) ;
     $labore = DB::select('select * from labore') ;
      return view('benutzerprofil',['users'=>$users, 'labore'=>$labore]) ;
   }
   public function edit(Request $request,$id) {
     $name = $request->input('name') ;
	  $email = $request->input('email') ;
    $administrator = $request->input('administrator') ;
	  $schuelerlabor = $request->input('schuelerlabor') ;
      DB::update('update users set name = ? where id = ?',[$name,$id]) ;
	  DB::update('update users set email = ? where id = ?',[$email,$id]) ;
    DB::update('update users set administrator = ? where id = ?',[$administrator,$id]) ;
	  DB::update('update users set schuelerlabor = ? where id = ?',[$schuelerlabor,$id]) ;
	  ?><meta http-equiv="refresh" content="0; URL=/public/benutzerverwaltung"><?php
   }
}
