<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = Band::all();

        return response()->json($bands);
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
        $rules = array(
            "name" => "required",
            "genre" => "required",
            "profile_photo_path" => "required",
            "cover_photo_path" => "required",
            "verified" => "required",
            "description" => "required",
            "location" => "required",
            "email" => "required",
            "contact_number" => "required",
            "user_id" => "required"
        );
        $this->validate($request, $rules);

        $new_band = new Band;
        $new_band->name = $request->name;
        $new_band->genre = $request->genre;
        $new_band->profile_photo_path = $request->profile_photo_path;
        $new_band->cover_photo_path = $request->cover_photo_path;
        $new_band->verified = $request->verified;
        $new_band->description = $request->description;
        $new_band->location = $request->location;
        $new_band->email = $request->email;
        $new_band->contact_number = $request->contact_number;
        $new_band->user_id = $request->user_id;
        $new_band->save();

        return redirect('/profile/'.$new_band->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $band = Band::find($id);
        return response()->json($band);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Band $band)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bandToDelete = Band::find($id);
        $bandToDelete->delete();
        return redirect('/home');
    }
}
