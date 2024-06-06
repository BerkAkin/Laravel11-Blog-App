<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdmin;


Route::group(['prefix'=> 'auth'], function(){
    Route::get('logout',[PostController::class,'logout'])->name('logout');
    Auth::routes();
});


Route::middleware([CheckAdmin::class])->group(function(){
    Route::get('users',[UserController::class,'show'])->name('users');
    Route::get('users/edit/{id}',[UserController::class,'edit'])->name('useredit');
    Route::get('users/delete/{id}',[UserController::class,'delete'])->name('userdelete');
    Route::get('users/create',[UserController::class,'create'])->name('usercreate');
    Route::post('users/store',[UserController::class,'store'])->name('userstore');

});



Route::controller(HomeController::class)->group(function(){
    Route::get('userposts','userposts')->name('userposts');    
    Route::get('userhome','index')->name('userhome');
    //Route::post('home','create');

    Route::get('post/create','postcreate')->name('postcreate');
    Route::post('post/store','poststore')->name('poststore');
    Route::get('post/delete/{id}','delete')->name('postdelete');
    Route::get('post/edit/{id}','edit')->name('postedit');
    Route::post('post/update','update')->name('postupdate');
    
    Route::post('/ckeditorUpload','ckeditorupload')->name('ckeditor.upload');
});




Route::controller(PostController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('posts','index');
    Route::get('{slug}','show');
    
    Route::post('postcomments','postComment')->name('yorumyap');
    Route::get('getcomments','getComments')->name('yorumgetir');
    Route::get('yorumsil/{id}','yorumsil')->name('yorumSil');

    
});



