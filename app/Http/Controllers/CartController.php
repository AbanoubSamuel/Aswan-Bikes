<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\order_item;
use App\Models\order_;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

         $data=auth()->user()->cart;
         $tottal=0;
         foreach ($data as  $value) {
         $tottal += $value['total'];
         }
        return view("web.total",compact("data","tottal"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $order_item=order_item::all();
        // $order_=order_::all();
        // $product=product::all();
        // return view("web.total",compact("order_item","order_"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        // dd(auth()->user()->id);
       Cart::create($request->all());

       return redirect("cart");


      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //dd($request);
        $start_time = \Carbon\Carbon::parse($request->input('startdate'));
       $finish_time = \Carbon\Carbon::parse($request->input('returndate'));

       $price = $request->input('price');
       $quantity = $request->input('quantity');

       $result = $start_time->diffInHours($finish_time, false);
      //dd($result);
      $total=$result *$price*$quantity;

    //    dd($cart);
        //   $cart->update($request->all());
        $cart->update(["quantity"=>$request["quantity"],"user_id "=>$request["user_id"],"product_id"=>$request["product_id"]
       , "startdate"=>$request["startdate"],"returndate"=>$request["returndate"],"price"=>$request["price"],"total"=>$total]);


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
       $cart->delete();
       return back();
    }













}
