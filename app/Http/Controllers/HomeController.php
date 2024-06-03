<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $posts = Posts::orderBy('created_at', 'DESC')->get();
        return view('users.home',compact('posts'));
    }

    public function create(Request $request){
        $post = new Posts();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = Str::slug($request->title,'-','tr');
        if($request->hasFile('image')){
            $filename = 'postphoto-'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('public/images/posts', $filename);
            $post->photo = "posts/". $filename;
        }
        else{
            $post->photo="";
        }
        $post->author_id = Auth::user()->id;
        $post->save();
        return redirect('home');
    }

    public function delete($id){
        $post = Posts::find($id);

        $photo = $post->photo;
        Storage::delete("public/images/".$photo);

        $post->delete();
        return redirect('home');
    }

    public function edit($id){
        $post = Posts::find($id);
        return view('users.edit',compact('post'));
    }

    public function update(Request $request){
        $id = $request->postid;
        $post = Posts::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $hasFile = $request->hasFile('image');
        if($hasFile){
            $filename = 'postphoto-'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('public/images/posts', $filename);
            $post->photo = "posts/". $filename;
            $oldimage = $request->oldimage;
            Storage::delete("public/images/".$oldimage);
        }
        $post->save();
        return redirect('home');
    }

    

}
