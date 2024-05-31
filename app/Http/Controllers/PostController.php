<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index(){
        $posts = Posts::all();
        return view("home",compact('posts'));
    }

    public function show($slug){
       $posts = Posts::where('slug',$slug)->get()->first();
       return view('show',compact('posts'));
    }
}
