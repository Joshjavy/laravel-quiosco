<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    
    public function register(RegistroRequest $request){
        //validar registro
        $data = $request->validate();
    }

    public function login(RegistroRequest $request){

    }

    public function logout (RegistroRequest $request){
        
    }

}
