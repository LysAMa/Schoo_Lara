<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
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

}
