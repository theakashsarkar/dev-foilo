<?php

namespace App\Repository;

use Illuminate\Support\Facades\Auth;

class Login
{
    public function authenticate($request): string
    {
        if (! Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return "User not login";
        }
    }
}
