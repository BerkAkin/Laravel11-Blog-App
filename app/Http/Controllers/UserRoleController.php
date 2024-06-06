<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comments;

class UserRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){   
        return view('users.home');
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
        if(Auth::user()->id == $comments->from_user or Auth::user()->role=='admin'){
            $comments->delete();
        }

        return redirect()->back();
    }

}
