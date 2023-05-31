<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VerifyMobileNumber extends Controller
{
    public function create(): View{
        return view('user.verify');
    }
    public function checkCode(Request $request)
    {
        $check = User::where('code', $request->code)->first();
        if ($check) {
            $check->code = "";
            $check->save();
            return redirect('/');
        } else {
            return back()->withMessage('verify code is not correct');
        }
    }
}
