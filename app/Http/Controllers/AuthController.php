<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Laravel\Lumen\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth.login');
    }

    public function attempt()
    {
        if (Auth::attempt(Input::only('email', 'password'))) {
            return redirect('admin');
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
