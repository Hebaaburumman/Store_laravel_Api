<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; // Add this line
use Illuminate\Support\Facades\Auth; // Add this line
use Illuminate\Validation\Rule;

class SignupController extends Controller
{
    public function show()
    {
        return view('Auth.register');
    }



    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'regex:/^(\S+\s*){3}\S+$/'], // Accepts 4 words
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    
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
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation failed. Please check the form and try again.');
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
    
        Auth::attempt($credentials);
    
        // Redirect to a success page or wherever you want
        $successMessage = 'Welcome, ' . $user->name . '!';
        return redirect()->route('products.list', $user->id)->with('success', $successMessage);
    }
    
}
