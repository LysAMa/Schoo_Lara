<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('pages.dashpages.dash');
    }

    //investigations
    public function investigations(){
    	
    }

    //inbox
    public function inbox(){
    	return view('pages.dashpages.inbox');
    }

}