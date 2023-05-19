<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Providers\RouteServiceProvider;
use App\Repository\AdminRegister;
use App\Repository\authenticationInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function __construct(
        public AdminRegister $Admin,
    ){}

    public function create(): View
    {
        return view('auth.admin.register');
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $this->Admin->create($request);
        return redirect('admin/login');
    }
}
