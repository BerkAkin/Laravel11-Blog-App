<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdmin;


Route::middleware([CheckAdmin::class])->group(function(){
    Route::get('users',[UserController::class,'show'])->name('users');
    Route::get('users/edit/{id}',[UserController::class,'edit'])->name('useredit');
    Route::get('users/delete/{id}',[UserController::class,'delete'])->name('userdelete');
    Route::get('users/create',[UserController::class,'create'])->name('usercreate');
    Route::post('users/store',[UserController::class,'store'])->name('userstore');

});

Route::get('home',[HomeController::class,'index'])->name('userhome');
Route::post('home',[HomeController::class,'create']);
Route::get('post/delete/{id}',[HomeController::class,'delete'])->name('postdelete');
Route::get('post/edit/{id}',[HomeController::class,'edit'])->name('postedit');
Route::post('post/update',[HomeController::class,'update'])->name('postupdate');




Route::group(['prefix'=> 'auth'], function(){
    Route::get('logout',[PostController::class,'logout'])->name('logout');
    Auth::routes();
});

Route::controller(PostController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('posts','index');
    Route::get('{slug}','show');
    Route::get('yorumsil/{id}','yorumsil')->name('yorumSil');
    Route::post('postcomments','postComment')->name('yorumyap');
    Route::get('getcomments','getComments')->name('yorumgetir');
    Route::post('/ckeditorUpload','ckeditorupload')->name('ckeditor.upload');
});



