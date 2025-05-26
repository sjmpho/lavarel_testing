<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {//so the URl is basically the tag for it
    return view('home');
});
Route::POST('/register',[UserController::class,'Register'] );
Route::get('/toMain',function(){

    return view('mainpage');
},);
