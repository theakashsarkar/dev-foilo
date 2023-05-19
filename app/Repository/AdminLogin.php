<?php

namespace App\Repository;

use Illuminate\Support\Facades\Auth;

class AdminLogin implements LoginInterface
{

    public function authenticate($request): void
    {
       if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
           {
               $request->session()->regenerate();
           }
    }
}
