<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{


    public function showLogin()
    {

        if (Auth::check()) {
            return redirect()->route('admin.index');
        }
        return view('auth.login');


    }

    public function AdminIndex()
    {
        return view('layouts.admin');
    }

    public function login(Request $request)
    {


        $email = $request->email;
        $password = $request->password;
        $remember_token = $request->remember_token;
        !is_null($remember_token) ? $remember_token = true : $remember_token = false;

        $user = User::where('email', $email)->first();
        if ($user && Hash::check($password, $user->password)) {

            Auth::login($user, $remember_token);
            return redirect()->route('admin.index');


        } else {

            alert()->error('Uyarı', 'Kullanıcı Adı Veya Şifre Yanlış')->showConfirmButton('Tamam', '#3085d6');
            return redirect()->route('login');
        }


    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


}
