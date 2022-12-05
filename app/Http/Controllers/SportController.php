<?php

namespace App\Http\Controllers;

use App\Models\sport;
use Illuminate\Http\Request;


class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(sport $sport)
    {
        $data=sport::all();


        return view("sport.sporttable",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("sport.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        sport::create(["name"=>$request["name"]]);

        return redirect("sport");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */


    public function edit(sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(sport $sport)
    {
        $sport->delete();

          return redirect("sport");
    }
}
