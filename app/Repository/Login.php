<?php

namespace App\Repository;

use Illuminate\Support\Facades\Auth;

class Login
{
    public function authenticate($request): void
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
        }
    }
}
