<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\registerRequest;
use App\Models\course;
use App\Models\User;
use App\Rules\nationalcodeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

  public function __construct()
  {
    $this->middleware(['auth','checkActiveUser']) ;
    
  }


  public function index()
  {

    // $teachers = User::all()->where('type','teacher') ;

    // $students = User::where('type','student')->orderBy("active_status",'asc')->get() ;

    $students = User::where([['type','student'],['active_status',0]])->get() ;

    $teachers = User::where([['type','teacher'],['active_status',0]])->get() ;

    return view("home",compact('teachers','students'));
  }
   

}


?>