<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('home',[PostController::class,'index']);
Route::get('/', [PostController::class,'index']);

Route::group(['prefix'=> 'auth'], function(){
    Auth::routes();
});

Route::controller(PostController::class)->group(function(){
    Route::get('posts','index');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
