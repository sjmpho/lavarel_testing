<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {//so the URl is basically the tag for it
    return view('home');
});
Route::POST('/register',[UserController::class,'Register'] );
Route::POST('/login',[UserController::class,'Login'] );
Route::POST('/logout',[UserController::class,'LoginOut'] );

Route::get('/toMain',function(){

    return view('mainpage');
},);
