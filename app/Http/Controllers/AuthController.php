<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showlogin()
    {
        return view('auth.login');
    }
    public function showregister()
    {
        return view('auth.register');
    }
    public function Login(Request $request)
    {
        $checkEmail = User::where('email', $request->email)->first();
        if (!$checkEmail) {
            return redirect()->back()->with('error', 'Email Not Found!');
        }
        $checkPassword = Hash::check($request->password, $checkEmail->password);
        if (!$checkPassword) {
            return redirect()->back()->with('error', 'Wrong Password');
        }
        auth()->login($checkEmail);
        return redirect('/')->with('success', 'Welcome ' . auth()->user()->name);
    }
    public function Register(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ], [
            'email.unique' => 'Email already exists.',
            'password.min' => 'Password must be at least 8 characters long.',
        ]);

        // Create user if validation passes
        $createdUser = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Log in the created user
        auth()->login($createdUser);

        // Redirect with success message
        return redirect('/')->with('success', 'Welcome ' . auth()->user()->name);
    }

    public function Logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
