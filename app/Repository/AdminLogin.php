<?php

namespace App\Repository;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminLogin
{

    public function userAuthentication($data): RedirectResponse
    {
//        $isLogged = Auth::guard('admin')->attempt(['email' => $data->email, 'password' => $data->password]);
//        return $isLogged;
        $credential = $data->only(['email', 'password']);
        $isLogged = Auth::guard('admin')->attempt($credential);
        if ($isLogged)
           {
//               $data->session()->regenerate();
//               return redirect('admin/dashboard');
                return redirect()->intended(route('admin.dashboard'));
           } else {
            return redirect('admin.login');
        }
    }
}
