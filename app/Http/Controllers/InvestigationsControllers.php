<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Models\Investigation;
use App\User;


class InvestigationsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $client = new Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']
        ]);
        
        $res = $client->request('GET', 'https://kc.kobotoolbox.org/api/v1/data', [
            'auth' => ['edx_2017', 'monkobotoolbox']
        ]);

        $investigations = $res->getBody();

        return view('pages.dashpages.investigations')->with('investigations', $investigations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $investigation = new Investigation;

        $investigation->name = $request->name;
        $investigation->zone = $request->zone;
        $investigation->description = $request->description;
        $investigation->lien = $request->link;
        $investigation->user_id = Auth::id();

        $investigation->save();

        return redirect()->back();
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
        //
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
        $investigation = Investigation::findOrFail($id);
        $investigation->update([
           'name' => $request->name,
           'lien' => $request->link,
           'image' => '',
           'zone' => $request->zone,
           'description' => $request->description,
           'user_id' => Auth::id()
       ]);

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
        $investigation = Investigation::find($id);
        $investigation->delete();

        return redirect()->back();
    }
}