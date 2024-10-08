<?php

use App\Http\Controllers\AuthenticatedSessionConstroller;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/items',[ItemController::class , 'index']);

Route::get('/category_items',[ItemController::class,'category_items']);

Route::post('/login', [AuthenticatedSessionConstroller::class, 'login']);

Route::get('/carts',[ItemController::class,'carts']);

Route::get('/carts/{id}',[ItemController::class,'cart']);


Route::post('/add_cart',[ItemController::class,'add_cart']);

Route::post('/add_cartItem',[ItemController::class,'add_cartItem']);

