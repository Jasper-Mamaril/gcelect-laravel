<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Partylists;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email', // Unique email validation for registration
            'password' => 'required|min:6',
            'checkPassword' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors(), 'register')->withInput();
        }

        // Create user
        $user = User::create([
            'user_fname' => $request->firstname,
            'user_lname' => $request->lastname,
            'user_roles' => 'user',
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        auth()->login($user);

        return redirect('/')->with('success', 'Successfully Created an Account!');
    }

    public function registerPartylist(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|unique:partylists,partylist_name',
            'email' => 'required|email', // Unique email validation for partylist registration
            'password' => 'required|min:6',
            'checkPassword' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors(), 'registerPartylist')->withInput();
        }

        // Create user
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

        return redirect('/')->with('success', 'Successfully Created an Account!');
    }
}
