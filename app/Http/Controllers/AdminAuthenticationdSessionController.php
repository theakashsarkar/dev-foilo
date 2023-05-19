<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Repository\AdminLogin;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminAuthenticationdSessionController extends Controller
{
    public function __construct(
        public AdminLogin $login
    ){}
    public function create(): View
    {
        return view('auth.admin.login');
    }

    public function store(LoginRequest $request)
    {
        $this->login->authenticate($request);
        return redirect('admin/dashboard');
    }
}
