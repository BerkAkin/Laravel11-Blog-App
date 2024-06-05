<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show(){
        $users = User::all();
        return View('users.show',compact('users'));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect('/');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('users');
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }
}
