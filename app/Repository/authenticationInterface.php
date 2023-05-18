<?php

namespace App\Repository;


use Illuminate\Http\Request;

interface authenticationInterface {
    public function createUser(Request $request): void;
}
