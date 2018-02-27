<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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

    public function projects(){
    	return view('pages.dashpages.projects');
    }
 

    //investigations
    public function investigations(){
    	return view('pages.dashpages.investigations');
    }

    //inbox
    public function inbox(){
    	return view('pages.dashpages.inbox');
    }

}
