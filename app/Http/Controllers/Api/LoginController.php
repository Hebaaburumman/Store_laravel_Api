<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Passport\Passport;

class LoginController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->accessToken;

            return response()->json([
                'message' => 'Login successful',
                'user' => $user,
                'access_token' => $token,
            ]);
        }

        // Authentication failed for both email and password
        throw ValidationException::withMessages([
            'email' => ['These credentials do not match our records.'],
            'password' => ['Invalid credentials.'],
        ]);
    }
}

