<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class,'index']);

Route::group(['prefix'=> 'auth'], function(){
    Auth::routes();
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
