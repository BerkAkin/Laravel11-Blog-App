<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

Route::get('home',[HomeController::class,'index']);
Route::get('/', [PostController::class,'index']);

Route::group(['prefix'=> 'auth'], function(){
    Auth::routes();
});

Route::controller(PostController::class)->group(function(){
    Route::get('posts','index');
    Route::get('{slug}','show');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
