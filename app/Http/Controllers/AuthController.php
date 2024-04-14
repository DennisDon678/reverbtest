<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:8',
        ]);


        if ($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$request->password
        ])){
            Auth::attempt([
                'email' =>$request->email,
                'password' => $request->password
            ]);

            return redirect('chat');
        }
    }

    public function login(Request $request){
        Auth::attempt([
            'email' =>$request->email,
            'password' => $request->password
        ]);

        return redirect('chat');
    }
}
