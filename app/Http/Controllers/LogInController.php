<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LogInController extends Controller {
   public function loginform(){
      return view('Login');
   }
	
   public function checkUser(Request $request){
      $name = $request->input('stud_name');
      $results = DB::select('select * from student where name = ?', [$name]);
	  print_r($results);
	  $wordCount = count($results);
	  echo $wordCount;
	  if($wordCount > 0)
	  {
		  return view('forms');
	  }
	  else
	  {
		  return view('Login');
	  }
   }
}
