<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login()
    {
        return view("auth.login");
    }

    function loginPost(Request $request)
    {
        $request->validate([
            "email"=> "required",
            "password"=> "required",
        ]);

        $credential = $request-> only ("email","password");

        if(Auth::attempt($credential)){
            return redirect()->intended(route('login'))->with('success', 'Login successful!');;
            // return redirect(route('login'))->with('success', 'Login successful!');
            // why intended
            // A guest user tries to visit /dashboard ➔ Laravel sees they are not logged in ➔ sends them to /login.
            // After they log in successfully, Laravel remembers that they originally wanted /dashboard, so it 
            // automatically redirects them there — not to the home page.
        }

        return redirect(route('login'))->with("error", "Invalid email or password");
    }

    function register()
    {
        return view("auth.register");

    }

    function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => "validation error",
                "errors" => $validator->errors(),
            ], 401);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route('home'))->with('success', "registration successfull");
    }
}
