<?php

namespace App\Repository;


use Illuminate\Http\Request;

interface authenticationInterface {
    public function create(Request $request): void;
}
