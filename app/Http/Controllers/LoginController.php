<?php

namespace App\Http\Controllers;

use App\Models\User;  // Add this line to import the User model
use Illuminate\Support\Facades\Hash;  // Add this line to import the Hash facade
use Illuminate\Support\Facades\Auth;  // Add this line to import the Auth facade
use Illuminate\Validation\ValidationException;  // Add this line to import the ValidationException class
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


class LoginController extends Controller
{
    public function show()
{
    return view('Auth.login');
}
    

public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials, $request->has('remember'))) {
        $user = Auth::user();
        $successMessage = 'Welcome, ' . $user->name . '!';
        return redirect()->route('products.list', $user->id)->with('success', $successMessage);
    }

    // Authentication failed for both email and password
    throw ValidationException::withMessages([
        'email' => ['These credentials do not match our records.'],
        'password' => ['Invalid credentials.'],
    ])->redirectTo(route('login'));
}


   

}
