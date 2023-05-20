<?php

namespace App\Repository;

interface LoginInterface
{
    public function userAuthentication($request): void;
}
