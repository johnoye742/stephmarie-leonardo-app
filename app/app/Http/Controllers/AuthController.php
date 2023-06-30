<?php

namespace App\Http\Controllers;

use App\Models\User;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request) {
        $credentials = $request -> only('email', 'password');

        $validatedData = $request -> validate([
            'email' => "required|email",
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials, true)) {
            return redirect() -> intended('dashboard');
        }

        return redirect() -> back() -> withErrors(['credentials do not match']);
    }

    public function showLogin() {
        return view("login");
    }

    public function showSign() {
        return view('sign-up');
    }

    public function signUp(Request $request) {


        $validatedData = $request -> validate([
            'uname' => "required|max:255",
            'fname' => "required|max:255",
            'lname' => "required|max:255",
            'email' => "required|email|unique:users",
            'pwd' => "required|min:8",
            'gender' => "required"
        ]);

        
        
        $user = User::create([
            "name" => $validatedData['fname'] . " " . $validatedData['lname'],
            "username" => $validatedData['uname'],
            "email" => $validatedData['email'],
            "password" => Hash::make($validatedData['pwd']),
            "gender" => strtolower($validatedData['gender']),
            "image_url" => ""
        ]);

        Auth::login($user);
        

        return redirect()->intended('dashboard');
    }
}
