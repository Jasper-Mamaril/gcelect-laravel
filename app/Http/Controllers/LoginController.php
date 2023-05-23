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

                // return redirect()->intended('users/user-home');

            if(auth()->user()->user_roles == 'admin'){
                return redirect()->intended('admin/admin-home');
            } if(auth()->user()->user_roles == 'partylist'){
                return redirect()->intended('partylist/partylists-home');
            }
            // } if(auth()->user()->user_roles == 'user'){
                // return redirect()->intended('users/user-home');
            // }
            else {
                // return redirect()->intended('error/error');
                return redirect()->intended('users/user-home');
                // return redirect()->intended('admin/admin-home');
            }

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
