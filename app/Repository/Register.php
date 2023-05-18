<?php

namespace App\Repository;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Register implements authenticationInterface
{
    public function createUser(Request $request): void
    {
         User::insert([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'password' => Hash::make($request->password),
        ]);
    }
}
