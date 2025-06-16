<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if ($user && Hash::check($validated['password'], $user->password)) {
            Auth::login($user);
            return redirect()->route('index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }

     // Register a new user
     public function register(Request $request)
     {
         $validated = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email',
             'password' => 'required|string|min:8|confirmed',
         ]);
 
         $user = User::create([
             'name' => $validated['name'],
             'email' => $validated['email'],
             'password' => Hash::make($validated['password']),
         ]);
 
         Auth::login($user); // Automatically log in the user after registration
 
         return redirect()->route('index'); // Redirect to a desired route
     }

    // Log the user out
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}