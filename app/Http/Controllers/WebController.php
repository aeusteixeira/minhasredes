<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function enterLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->senha
        ];

        if(!Auth::attempt($credentials)){
            return redirect()->route('login.index')->with('status', 'E-mail ou senha inválido');
        }

        return redirect()->route('index');
    }
}

