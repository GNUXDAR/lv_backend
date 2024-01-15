<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function createUser(CreateUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'status' => true,
            'message' => 'User created successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken //metodo de sanctum
        ], 200);
    }

    public function loginUser(LoginRequest $request)
    { 
        // class Auth::user() para validar a los datos de usuarios logueados
        // attempt
        if(!Auth::attempt($request->only(['email', 'password'])))
        {
            return response()->json([
                'status' => false,
                'message' => 'Email & Password error' 
            ], 401);
        }

        $user = USer::where('email', $request->email)->first();

        return response()->json([
            'status'=> true,
            'message' => 'USer logged in successfullt',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }
}
