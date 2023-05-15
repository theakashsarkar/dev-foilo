<?php

namespace App\Repository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Register implements authenticationInterface
{
    public function createUser(array $request)
    {
        User::insert([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }
}
