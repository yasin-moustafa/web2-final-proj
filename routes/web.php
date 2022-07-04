<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DachboardController;
use \App\Http\Controllers\ProductsController;
use \App\Http\Controllers\CategoresController;
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
/*front*/
Route::prefix('/')->group(function (){

    Route::get('home', function () {
        return view('frontend.index');
    })->name('home');
    Route::get('contact', function () {
        return view('frontend.contact');
    })->name('contact');
    Route::get('shop', function () {
        return view('frontend.shop');
    })->name('shop');
    Route::get('blog', function () {
        return view('frontend.blog');
    })->name('blog');

});



/*admin*/
Route::prefix('admin')->group(function (){

    Route::get('/',[DachboardController::class,'index']);
    Route::resource('/product',ProductsController::class);
    Route::resource('/categore',CategoresController::class);


});/*Admin Dashboard*/

