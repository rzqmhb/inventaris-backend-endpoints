<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile(Request $request){
        $user = $request->user();

        return response()->json([
            'status' => 'true',
            'data' => [
                'id' => $user->id,
                'name'=> $user->name,
                'email'=> $user->email
            ],
            'message' => 'get sukses'
        ], 200);
    }

    public function updateProfile(Request $request){
        $user = $request->user();

        $data = $request->validate([
            'name' => 'sometimes|required|string',
            'email' => 'sometimes|required|email|unique:users,email',
        ]);

        $user->update($data);

        return response()->json([
            'status' => 'true',
            'data' => [
                'id' => $user->id,
                'name'=> $user->name,
                'email'=> $user->email
            ],
            'message' => 'update sukses'
        ], 200);
    }
}
