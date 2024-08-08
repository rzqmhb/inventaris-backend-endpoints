<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            "email"=> "required|string|email",
            "password"=> "required|string"
        ]);

        if (! Auth::attempt($credentials)) {
            return response()->json([
                'status' => 'false',
                'data' => '',
                'message' => 'login gagal'
            ], Response::HTTP_BAD_REQUEST);
        }

        $user = $request->user();
        $token = $user->createToken('user access token')->plainTextToken;
        // dd($credentials);
        // dd($user);

        return response()->json([
            'status' => 'true',
            'data' => [
                'token' => $token,
                'token_type'=> 'Bearer',
            ],
            'message' => 'login sukses'
        ], Response::HTTP_OK);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        // Auth::logout();

        return response()->json([
            'status' => 'true',
            'message' => 'logout sukses'
        ], Response::HTTP_OK);
    }
}
