<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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


    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('users');
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.useredit',compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->age= $request->age;
        $user->gender = $request->gender;

        $hasFile= $request->hasFile('photo');
        if($hasFile){
            $filename = 'userphoto-'.time().'.'.$request->file('photo')->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('public/images/user', $filename);
            $user->photo = "user/". $filename;
        }
        $user->save();
        return redirect('users')->with('status','Kullanıcı Düzenleme Başarılı');
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=>['required', 'string', 'min:8'],
            'role'=>['required'],
            'age'=>['required'],
            'gender'=>['required'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->age= $request->age;

        $hasFile= $request->hasFile('photo');
        if($hasFile){
            $filename = 'userphoto-'.time().'.'.$request->file('photo')->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('public/images/user', $filename);
            $user->photo = "user/". $filename;
        }
        $user->save();
        return redirect('users')->with('status','Kullanıcı Ekleme Başarılı');

    }
}
