<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('home',[HomeController::class,'index'])->name('userhome');
Route::post('home',[HomeController::class,'create']);
Route::get('post/delete/{id}',[HomeController::class,'delete'])->name('postdelete');
Route::get('post/edit/{id}',[HomeController::class,'edit'])->name('postedit');
Route::post('post/update',[HomeController::class,'update'])->name('postupdate');

Route::get('/', [PostController::class,'index'])->name('home');

Route::group(['prefix'=> 'auth'], function(){
    Route::get('logout',[UserController::class,'logout'])->name('logout');
    Auth::routes();
});

Route::controller(PostController::class)->group(function(){
    Route::get('posts','index');
    Route::get('{slug}','show');
});



