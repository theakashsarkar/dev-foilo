<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Repository\AdminLogin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
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
      return  $this->login->userAuthentication($request);
    }

    public function destroy()
    {
        Auth::guard('admin')->logout();
        return redirect('admin.login');
    }
}
