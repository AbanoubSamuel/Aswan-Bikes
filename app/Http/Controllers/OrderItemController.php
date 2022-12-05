<?php

namespace App\Http\Controllers;

use App\Models\order_item;
use App\Models\order_;
use App\Models\product;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=order_item::all();

        return view("order_item.itemTable",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order=order_::all();
        $product=product::all();

        return view("order_item.itemform",compact("order","product"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        order_item::create(["product_id"=>$request["product_id"],"order_id"=>$request["order_id"],
        "number"=>$request["number"],"rent_date"=>$request["rent_date"]
        ,"return_date"=>$request["return_date"],"price"=>$request["price"]]);

         return redirect("item");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function show(order_item $order_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function edit(order_item $item)
    {
        return view("order_item.itemEdit",["data"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order_item $item)
    {
        $item->update(["product_id"=>$request["product_id"],"order_id"=>$request["order_id"],
        "number"=>$request["number"],"rent_date"=>$request["rent_date"]
        ,"return_date"=>$request["return_date"],"price"=>$request["price"]]);
        return redirect("item");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_item $item)
    {
        $item->delete();

        return redirect("item");
    }
}
