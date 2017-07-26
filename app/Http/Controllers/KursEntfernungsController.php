<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KursEntfernungsController extends Controller {
   public function index($id) {
     DB::delete('delete from kurse where id = ?', [$id]);
  ?><meta http-equiv="refresh" content="0; URL=/public/kursverwaltung"><?php
   }

}
