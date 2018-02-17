<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    //userProfile
    public function userProfile(){
    	return view('pages.dashpages.profile');
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
