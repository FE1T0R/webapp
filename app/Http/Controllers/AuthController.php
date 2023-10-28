<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function sign_in()
    {
        $credentials = request()->only('email','password');
        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect(route('sites.index'));
        }else{
            return redirect(route('auth.form.sign_in'));
        }
    }
    public function sign_up()
    {
        return view('auth/sign_up');
    }
    public function log_out()
    {
        Auth::logout();
        return redirect(route('home'));
    }


}
