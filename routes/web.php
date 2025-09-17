<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductControler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome/rahma', [UserController::class,'index']);

Route::get('/product', [ProductControler::class,'index']);