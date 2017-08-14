<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VersionsController extends Controller {
   public function show() {
           $version = DB::select('select * from version where id=1') ;
      return view('versionsaenderung',['version'=>$version]) ;
   }
   public function edit(Request $request) {
    $versionneu = $request->input('versionneu');
      DB::update('update version set version = ? where id = 1',[$versionneu]) ;
	  ?><meta http-equiv="refresh" content="0; URL=/public/home"><?php
   }
}
