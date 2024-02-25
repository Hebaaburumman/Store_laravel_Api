<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;


class UserController extends Controller
{
    public function list()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return response()->json(['users' => $users], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|regex:/^(\S+\s*){3,}$/|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|max:20',
        ], [
            'name.regex' => 'The name must contain at least 4 words.',
            'password.min' => 'The password must be at least 6 characters.',
            'password.max' => 'The password must not exceed 20 characters.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return response()->json(['message' => 'User created successfully'], 201);
    }

    public function update(Request $request, $userId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|regex:/^(\S+\s*){3,}$/|max:255',
            'email' => 'required|email',
            'password' => 'nullable|string|min:6|max:20',
        ], [
            'name.regex' => 'The name must contain at least 4 words.',
            'password.min' => 'The password must be at least 6 characters.',
            'password.max' => 'The password must not exceed 20 characters.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = User::findOrFail($userId);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return response()->json(['message' => 'User updated successfully'], 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}

