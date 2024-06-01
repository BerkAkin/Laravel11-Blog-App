<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('home',[HomeController::class,'index']);
Route::get('/', [PostController::class,'index']);

Route::group(['prefix'=> 'auth'], function(){
    Route::get('logout',[UserController::class,'logout']);
    Auth::routes();
});

Route::controller(PostController::class)->group(function(){
    Route::get('posts','index');
    Route::get('{slug}','show');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
