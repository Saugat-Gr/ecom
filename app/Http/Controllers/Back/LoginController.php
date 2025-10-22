<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;


    protected $redirectTo = 'cms/dashboard';


    public function __construct()
    {
        $this->middleware('guest:cms')->except('logout');
        $this->middleware('auth:cms')->only('logout');
    }

    public function showLoginForm()
    {
        return view('back.login.show');
    }

    protected function guard()
    {
        return Auth::guard('cms');
    }
}
