<?php

namespace App\Http\Controllers;

use App\Models\order_;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=order_::all();

        return view("order.ordertable",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user=User::all();

        return view("order.orderform",compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        order_::create(["user_id"=>$request["user_id"],"total_price"=>$request["total_price"]]);

         return redirect("order");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_  $order_
     * @return \Illuminate\Http\Response
     */
    public function show(order_ $order_)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_  $order_
     * @return \Illuminate\Http\Response
     */
    public function edit(order_ $order)
    {
        return view("order.editorder",["data"=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order_  $order_
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order_ $order )
    {
        $order->update(["user_id"=>$request["user_id"],"total_price"=>$request["total_price"]]);

          return redirect("order");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_  $order_
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_ $order)
    {

        $order->delete();

        return redirect("order");
    }
}
