<?php

namespace App\Repository;

use App\Http\Requests\UserRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegister implements authenticationInterface
{

    public function create(UserRequest|Request $request): void
    {
        Admin::insert([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'password' => Hash::make($request->password),
        ]);
    }
}
