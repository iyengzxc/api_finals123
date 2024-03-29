<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt([
            "email"=>$request->email,
            "password"=>$request->password
        ])){
            $user = Auth::user();
            $token = $user->createToken($user->email)->plainTextToken;
            return response([
                "message"=>"Log in success!",
                "token"=>$token
            ]);
        }else{
            return response(["message"=>"Invalid username or password"],401);
        }
    }
}
