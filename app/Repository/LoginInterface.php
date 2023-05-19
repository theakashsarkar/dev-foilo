<?php

namespace App\Repository;

interface LoginInterface
{
    public function authenticate($request): void;
}
