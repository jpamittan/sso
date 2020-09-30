<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $user_data = array(
            'email' => $request->get('sso_email'),
            'password' => $request->get('sso_password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
