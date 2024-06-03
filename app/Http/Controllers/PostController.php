<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Posts;

class PostController extends Controller
{
    public function index(){
        $posts = Posts::orderBy('created_at', 'DESC')->get();
        return view("home",compact('posts'));
    }

    public function show($slug){
       $posts = Posts::where('slug',$slug)->get()->first();
       return view('show',compact('posts'));
    }


}
