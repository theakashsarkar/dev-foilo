<?php

namespace App\Repository;

use Illuminate\Support\Facades\Auth;

class AdminLogin
{

    public function userAuthentication($data)
    {
        $isLogged = Auth::guard('admin')->attempt(['email' => $data->email, 'password' => $data->password]);
        return $isLogged;

//       if ()
//           {
//               $data->session()->regenerate();
//           }
    }
}
