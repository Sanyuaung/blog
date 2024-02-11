<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthApi extends Controller
{
    public function getProfile()
    {
        $user = auth()->user();
        return response()->json($user);
    }
    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8', // Allow password to be nullable
        ];

        // Validate the incoming request with defined rules
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, return the error response
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        // Update user with validated data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        // Check if password field is provided and not empty
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return response()->json($user);
    }
}
