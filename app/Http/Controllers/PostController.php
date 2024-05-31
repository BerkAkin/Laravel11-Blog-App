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
}
