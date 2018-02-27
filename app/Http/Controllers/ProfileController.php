<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('pages.dashpages.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = User::findOrFail($id)->profile();
        $profile->update([
           'org_name' => $request->orgName,
           'first_name' => $request->firstName,
           'last_name' => $request->lastName,
           'address' => $request->address,
           'city' => $request->city,
           'country' => $request->country,
           'code_postal' => $request->codePostal,
           'bio' => $request->bio
       ]);
        // //$profile->orgName = $request->input('orgName');
        // $profile->first_name = $request->input('firstName');
        // $profile->last_name = $request->input('lastName');
        // $profile->address = $request->input('address');
        // $profile->city = $request->input('city');
        // $profile->country = $request->input('country');
        // $profile->code_postal = $request->input('codePostal');
        // $profile->bio = $request->input('bio');

        // $user = User::find($id);

        // $user->profile()->save($profile);

    	return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
