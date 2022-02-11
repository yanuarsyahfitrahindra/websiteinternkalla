<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    //
    public function index()
    {
        return view('admin.adminlogin');
    }

    public function authenticate(request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('msg', 'login failed!');
    }

    public function logout(request $request){
        Auth::logout();
        $request->session()->forget('username');
        $request->session()->forget('password');

        return redirect('/login');
    }
}
