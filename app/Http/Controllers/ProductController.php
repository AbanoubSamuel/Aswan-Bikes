<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Models\sport;
use App\Models\type;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=product::all();


        return view("product.tableproduct",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=sport::all();
        $type=type::all();
        $size=product::all();
        return view("product.formproduct",compact("data","type","size"));

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

        product::create(["sport_id"=>$request["sport_id"],"type_id"=>$request["type_id"],"size"=>$request["size"],
        "COLOR"=>$request["COLOR"],"img"=>$imgname,"describe"=>$request["describe"],
        "name"=>$request["name"],"price"=>$request["price"]]);

         return redirect("product");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)

    {


        return view("product.editform",["data"=>$product]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        // dd($product);
        $request->img->storeAs("public/img ",$request->img->getClientOriginalName());
        $imgname=$request->img->getClientOriginalName();

        $product->update(["sport_id"=>$request["sport_id"],"type_id"=>$request["type_id"],"size"=>$request["size"],
      "COLOR"=>$request["COLOR"],"img"=>$imgname,"describe"=>$request["describe"],"name"=>$request["name"],"price"=>$request["price"]]);

        return redirect("product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();

        return redirect("product");
    }
}
