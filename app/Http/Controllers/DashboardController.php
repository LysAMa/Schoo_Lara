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

    //userProfile
    public function userProfile(){
    	return view('pages.dashpages.profile');
    }

    public function editUserProfile(Request $request, $id){
        $user = User::find($id);
        $user->orgName = $request->input('orgName');
        $user->name = $request->input('name');
        $user->orgName = $request->input('orgName');
        $user->email = $request->input('email');
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->adresse = $request->input('adresse');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->postcode = $request->input('postcode');
        $user->aboutme = $request->input('aboutme');
        $user->save();

    	return redirect()->back();
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
