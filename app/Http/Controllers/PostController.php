<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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

    public function create(Request $request){
        $post = new Posts();
        $post->title= $request->title;
        $post->body= $request->body;
        $post->slug= Str::slug($request->title,'-','tr');
        $post->photo= $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/images');
        $post->author_id= Auth::user()->id;
        $post->save();
        return redirect('home');
    }
}
