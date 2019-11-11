<?php

namespace App\Http\Controllers;

use App\Gig;
use Illuminate\Http\Request;

class GigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gig = Gig::all();

        return response()->json($gig);
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
            "location" => "required",
            "gig_date" => "required",
            "gig_time" => "required"
        );
        $this->validate($request, $rules);

        $new_gig = new Gig;
        $new_gig->location = $request->location;
        $new_gig->gig_date = $request->gig_date;
        $new_gig->gig_time = $request->gig_time;
        $new_gig->save();

        return response()->json($new_gig);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gig = Gig::find($id);
        return response()->json($gig);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function edit(Gig $gig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gig $gig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gig $gig)
    {
        //
    }
}
