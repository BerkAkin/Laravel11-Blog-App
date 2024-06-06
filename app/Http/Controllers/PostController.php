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
        return view("home",compact('posts'));
    }

    public function show($slug){
       $posts = Posts::where('slug',$slug)->get()->first();
       return view('show',compact('posts'));
    }

    public function postComment(Request $request){
        $comment = new Comments();
        $comment->on_post = $request->postId;
        $comment->from_user = Auth::user()->id;
        $comment->body= $request->comment;
        $comment->save();
        return redirect()->back();
    }

    public function yorumSil($id){
        $comments = Comments::find($id);
        if(Auth::user()->id == $comments->from_user ){
            $comments->delete();
        }

        return redirect()->back();
    }

   

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect('/');
    }

}
