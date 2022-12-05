<?php

use  Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\SportController;
use  App\Http\Controllers\TypeController;
use  App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\Webcontroller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ToursController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[Webcontroller::class, "landing"] );
Route::view("home","web.home");
Route::view("about","web.about");
Route::view("contact","web.contact");

Route::get("shop",[Webcontroller::class,"product"]);

Route::view("shop-single","web.shop-single");
Route::get("AswanTours",[Webcontroller::class,"aswantours"])->name("aswantours");

Route::view("templete","web.templete");
Route::view("reg","web.reg");
Route::view("log","web.login");
Route::view("payment","web.payment");

Route::post("total",[Webcontroller::class,"store"])->name("orderstore");

Route::view("dashtemp","web.dashtemp");
Route::get("dash",[Webcontroller::class,"user"]);


Route::get('filter/{id}', [WebController::class,"filter"])->name("filter");
Route::get('filtershop/{id}', [WebController::class,"filtershop"])->name("filtershop");
Route::get('form', [UserController::class,"create"]);
Route::post('form',  [UserController::class,"store"])->name('store');

Route::get('user', [UserController::class,"show"]);

Route::get("Delete/{id}",[UserController::class,"delete"])->name('delete');





Route::resource('sport',SportController::class);
Route::resource('type',TypeController::class);
Route::resource('product',ProductController::class);
Route::resource('order',OrderController::class);
Route::resource('item',OrderItemController::class);
Route::resource('cart',CartController::class);

 Route::resource('category',CategoryController::class);
 Route::resource('tours',ToursController::class);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


