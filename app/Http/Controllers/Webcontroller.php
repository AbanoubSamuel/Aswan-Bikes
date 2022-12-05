<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use App\Models\order_item;
use App\Models\order_;
use App\Models\category;
use App\Models\tours;
use App\Models\Cart;
use App\Models\sport;

class Webcontroller extends Controller
{
   public function product()
   {
   $data=product::all();
   $user=User::all();
   $sport=sport::all();
//    $order_item=order_item::all();
//    $order_=order_::all();

   return view("web.shop",compact("data","user","sport"));
   }

   public function aswantours()
   {

   $category=category::all();
   $data=tours::all();




   return view("web.AswanTours",compact("data","category"));
   }

   public function landing ()
   {
    return view("web.home");
   }

   public function filtershop($id)
   {
    $data=product::where("sport_id",$id)->get();

    $sport=sport::all();
    return view("web.shop",compact("data","sport"));
   }

  public function filter($id)
  {
   $data=tours::where("category_id",$id)->get();

   $category=category::all();
   return view("web.AswanTours",compact("data","category"));
  }


  public function store (Request $request)
  {
    $id=auth()->user()->id;

    $order=order_::create([
        'user_id'=>$id
        ,'total_price'=>$request["tottal"]
    ]);
   $carts=auth()->user()->cart;

   foreach ($carts as $carts){
    $order_item=order_item::create([
        'product_id'=>$carts->product_id,
        'order_id'=>$order["id"],
        'number'=>$carts->quantity,
        'rent_date'=>$carts->startdate,
        'return_date'=>$carts->returndate,
        'price'=>$carts->price


    ]);
   }
   $carts=auth()->user()->cart;
   foreach($carts as $cart){
    $cart->delete();
   }
   return view("web.payment");
  }





function user(Request $request)
{
    $order=order_::all("total_price");

    $tottal=0;
    foreach ($order as  $value) {
    $tottal += $value['total_price'];
    }


    $user=User::all();

    return view("web.dashhome",compact("user","order","tottal"));
}






}



