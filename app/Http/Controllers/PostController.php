<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function create(Request $request){
        $post = new Posts();
        $post->title= $request->title;
        $post->body= $request->body;
        $post->slug= $request->slug;
        $post->photo= "";
        $post->author_id= Auth::user()->id;
        $post->save();
        return redirect('home');
    }
}
