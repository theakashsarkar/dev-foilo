<?php

namespace App\Repository;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminLogin
{
    public function userAuthentication($data): RedirectResponse
    {
        $credential = $data->only(['email', 'password']);
        $isLogged = Auth::guard('admin')->attempt($credential);
        if ($isLogged)
           {
                return redirect()->intended(route('admin.dashboard'));
           } else {
            return redirect('admin.login');
        }
    }
}
