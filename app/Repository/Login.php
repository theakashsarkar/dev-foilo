<?php

namespace App\Repository;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class Login
{
    public function authenticate($request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
        }
    }
}
