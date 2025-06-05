<?php

use App\Http\Controllers\UIController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {//so the URl is basically the tag for it
    return view('home');
});
Route::POST('/register',[UserController::class,'Register'] );
Route::POST('/login',[UserController::class,'Login'] );
Route::POST('/logout',[UserController::class,'LoginOut'] );
ROUTE::POST('/getData',[UserController::class,'getData'] );
Route::GET('/toLogin',[UIController::class,'ChangeLoginForm'] );
Route::GET('/toRegForm',[UIController::class,'ChangeRegForm'] );

//notes routes
Route::GET('/CreateNote',[UIController::class,'CreateNote'] );
Route::POST('/SaveNote' ,[UserController::class,'SaveNote'] );

Route::get('/OpenNote/{id}', [UIController::class, 'openNote'])->name('openNote');
Route::GET('/ClearNote',[UIController::class,'ClearNotes'] );


Route::GET('/toMain',function(){

    return view('mainpage');
});
Route::GET('/toRegisterScreen',function (){
    return view('home');
} );;

Route::GET('/toHome',function(){

    return view('true-home');
});
