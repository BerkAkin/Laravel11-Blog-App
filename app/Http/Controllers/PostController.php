<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Posts;
use App\Models\Comments;

class PostController extends Controller
{
    public function index(){
        $count = Posts::count();
        $skip = 3;
        $limit = $count - $skip; 
        if($limit<=0){
            $limit = 4;
        }
        $posts = Posts::orderBy('created_at', 'DESC')->skip($skip)->take($limit)->get();
        $posts->shift();

        $ilkdort = Posts::orderBy('created_at', 'DESC')->take(4)->get();
        $popular = Posts::with('comments')->withCount('comments')->orderBy('comments_count', 'desc')->take(5)->get();
        return view("home",compact('posts','popular','ilkdort'));
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
