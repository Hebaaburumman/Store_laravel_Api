<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;


class SignupController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'regex:/^(\S+\s*){3}\S+$/'], // Accepts 4 words
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users'),
            ],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Check for validation failure
        if ($validator->fails()) {
            return response()->json([
                'error' => 'Validation failed',
                'message' => $validator->errors(),
            ], 422);
        }

        // Create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Attempt to authenticate the user
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            // Redirect to a success page or wherever you want
            $successMessage = 'Welcome, ' . $user->name . '!';
            return response()->json(['success' => $successMessage], 200);
        }

        // Authentication failed
        return response()->json([
            'error' => 'Authentication failed',
            'message' => 'Invalid credentials.',
        ], 401);
    }
}

