<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Repository\Login;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminAuthenticationdSessionController extends Controller
{
    public function __construct(
        public Login $login
    ){}
    public function create(): View
    {
        return view('auth.admin.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $this->login->authenticate($request);
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
