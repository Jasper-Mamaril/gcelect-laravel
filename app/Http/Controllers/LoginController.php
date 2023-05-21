<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show() {
        return view('welcome');
    }

    // public function showAdmin() {
    //     return view('auth.adminlogin');
    // }

    public function login(Request $request) {


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

                return redirect()->intended('partylists/partylists-home');
            
            // if(auth()->user()->role == 'Admin'){
            //     return redirect()->intended('admin/index');
            // } else {
            //     return redirect()->intended('stories/index');
            // }

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match!'
        ])->onlyInput('email');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
