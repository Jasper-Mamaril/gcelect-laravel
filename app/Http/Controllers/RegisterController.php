<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Partylists;
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
            'user_roles' => 'user',
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        auth()->login($user);

        return redirect('/')->with('success', 'Succesfully Created an Account!');
    }

    // register partylist
    public function registerPartylist(Request $request){
        // dd($request);
        $user = User::create([
            'user_fname' => $request->firstname,
            'user_lname' => 'Partylist',
            'email' => $request->email,
            'user_roles' => 'partylist',
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        $partylist = Partylists::create([
            'partylist_name' => $request->firstname,
        ]);

        auth()->login($user);

        return redirect('/')->with('success', 'Succesfully Created an Account!');
    }
}
