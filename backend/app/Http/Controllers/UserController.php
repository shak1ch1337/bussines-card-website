<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function signup(Request $request) {
        $validator = Validator::make($request->all(), [
            "login" => "required",
            "password" => "required"
        ]);

        if ($validator->fails())
        {
            return response()->json([
                'Error' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            "password" => Hash::make($request->password)
        ] + $validator->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'User created!',
            'data' => $user
        ], 200);
    }


    public function login(Request $request)
    {
        $user = User::where('login', $request->login)->first();

        if (!$user || !Hash::check($request->password, $user->password))
        {
            return response()->json([
                'status' => "error",
                'message' => "Неверные учетные данные"
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => "Bearer"
        ]);
    }

    public function index(User $user)
    {
        try
        {
            return $user->all();
        }
        catch (Exception $e)
        {
            return response()->json(['message' => 'error']);
        }
    }

    public function me(Request $request)
    {
        $user = $request->user();
    }
}
