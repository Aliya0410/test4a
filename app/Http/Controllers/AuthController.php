<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function register(){
        return view("auth.register");
    }

    public function logout(){
        Auth::logout();
      }

    public function registerOut(Request $request){
        $request->validate([
            "email"=> "required|email",
            "password"=> "required|min:5",
            "name"=> "required",
        ]);

        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('index');

    }

    public function loginOut(Request $request){
        $user = Auth::user();

        $user = User::where('email', $request->email)->first();
        if($user ) {

        }

        return redirect()->route('posts');
    }




}
