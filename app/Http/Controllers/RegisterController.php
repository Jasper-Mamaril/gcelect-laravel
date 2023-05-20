<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class RegisterController extends Controller
{
    // public function show() {
    //     return view('auth.register');
    // }

    public function register(Request $request){
        // dd($request);
        $user = User::create([
            'user_fname' => $request->firstname,
            'user_lname' => $request->lastname,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        auth()->login($user);

        return redirect('/')->with('success', 'Succesfully Created an Account!');
    }
}
