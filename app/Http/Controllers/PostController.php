<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Posts;
use App\Models\Comments;

class PostController extends Controller
{
    public function index(){
        $posts = Posts::orderBy('created_at', 'DESC')->get();
        $popular = Posts::with('comments')
            ->withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->get();
        return view("home",compact('posts','popular'));
    }

    public function show($slug){
       $posts = Posts::where('slug',$slug)->get()->first();
       return view('show',compact('posts'));
    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect('/');
    }

}
