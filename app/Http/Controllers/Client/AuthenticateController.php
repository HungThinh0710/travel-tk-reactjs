<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function login(LoginFormRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
            return redirect()->intended('profile');
        else
            return redirect('login')->withErrors('Tài khoản hoặc mật khẩu không đúng!');

    }
}
