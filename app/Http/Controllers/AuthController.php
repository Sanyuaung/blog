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
        $checkEmail = User::where('email', $request->email)->first();
        if ($checkEmail) {
            return redirect()->back()->with('error', 'Email Already Exit');
        }
        $createdUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        auth()->login($createdUser);
        return redirect('/')->with('success', 'Welcome ' . auth()->user()->name);
    }
    public function Logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}