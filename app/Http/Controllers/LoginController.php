<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;
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

    public function login(Request $request){
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $user = auth()->user();

        if ($user->user_roles === 'admin') {
            return redirect()->intended('/admin/admin-home');
        } elseif ($user->user_roles === 'partylist') {
            return redirect()->intended('/partylist/partylists-candidates');
        } else {
            return redirect()->intended('/users/user-home');
        }
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match!'
    ])->onlyInput('email');
}

    public function logout(){
        Session::flush();
        Auth::logout();
        // Artisan::call('route:clear'); // Clear route cache
        return redirect('/');
    }
}
