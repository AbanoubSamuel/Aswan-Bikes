<?php

namespace App\Http\Controllers;

use App\Models\tours;
use App\Models\category;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=tours::all();

        return view("tours.tourstable",compact("data"));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas=category::all();

        return view("tours.toursform",compact("datas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->img->storeAs("public/img ",$request->img->getClientOriginalName());
        $imgname=$request->img->getClientOriginalName();

        tours::create(["category_id"=>$request["category_id"],"img"=>$imgname,"description"=>$request["description"]]);

        return redirect("tours");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function show(tours $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function edit(tours $tour)
    {

        $category=category::all();
        return view("tours.editform",compact("category"),["data"=>$tour]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tours $tour)
    {
        $request->img->storeAs("public/img ",$request->img->getClientOriginalName());
        $imgname=$request->img->getClientOriginalName();


        $tour->update(["category_id"=>$request["category_id"],"img"=>$imgname,"description"=>$request["description"]]);
        return redirect("tours");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function destroy(tours $tour)
    {
        $tour->delete();

        return redirect("tours");
    }
}