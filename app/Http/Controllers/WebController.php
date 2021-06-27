<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'setting' => Setting::findOrFail(1),
            'networks' => Network::all(),
        ]);
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

}

