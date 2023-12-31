<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    
    public function register(RegistroRequest $request){
        //validar registro
        $data = $request->validated();
        // crear un usuario
        $user= User::Create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> bcrypt($data['password']),
        ]);

        // retornar respuesta
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user'=> $user,
        ];
    }

    public function login( LoginRequest $request){
        $data= $request->validate();
        
    }

    public function logout (RegistroRequest $request){
        
    }

}
