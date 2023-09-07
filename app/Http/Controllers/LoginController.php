<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Helpers\AuthHelper;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $login_type = filter_var($request->email, FILTER_VALIDATE_EMAIL)
            ? 'email' : 'username';

        $credentials = [
            $login_type => $request->email,
            "password" => $request->password
        ];

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(AuthHelper::redirectToDashboard(
                auth()->user()->role
            ));
        }

        return redirect()->route('login')
            ->with('error', 'Incorrect password');
    }
}
