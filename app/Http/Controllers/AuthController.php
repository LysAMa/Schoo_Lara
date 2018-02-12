<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
    	return view('pages.login');
    }

    public function handleLogin(Request $request){
    	$data = $request->only('email','password');
    	if(\Auth::attempt($data)){
    		return redirect()->intended('profile');
    	}

    	return back()->withInput();
    }

    public function logout(){
    	\Auth::logout();
    	return redirect()->route('home');
    }
}
