<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ReCaptcha\ReCaptcha;

class LoginController extends Controller
{
    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request, ReCaptcha $recaptcha)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => ['required', new Captcha],
        ]);
        return 'test';

        if ($this->attemptLogin($request)) {
            return redirect()->intended($this->redirectPath());
        }
    }
}
