<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
    public function login(){
    	return view('pages.login');
    }

    public function handleLogin(Request $request){

    	$this->validate($request, User::$login_validation_rules);

    	$data = $request->only('email','password');
    	if(\Auth::attempt($data)){
    		return redirect()->intended('profile');
    	}

    	return back()->withInput()->withErrors(['key' => 'Username or Password invalid.']);
    }

    public function logout(){
    	\Auth::logout();
    	return redirect()->route('home');
    }
}
