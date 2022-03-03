<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        return $request;
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $token=Auth::user()->createToken('user-auth');
            return response()->json([
                'message'=>'u are login',
                'token'=>$token
            ]);
        }
        return response()->json(['message'=>'login fail']);


    }
    public function logout(){

    }
}
