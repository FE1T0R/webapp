<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
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
    public function log_out()
    {
        Auth::logout();
        return redirect(route('home'));
    }
    public function sign_up(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $nuevo = new User();
        $nuevo->name =$request->name;
        $nuevo->lastname =$request->lastname;
        $nuevo->email =$request->email;
        $nuevo->username =$request->username;
        $nuevo->phone =$request->phone;
        $nuevo->question1 =$request->question1;
        $nuevo->question2 =$request->question2;
        $nuevo->question3 =$request->question3;
        $nuevo->answer1 =$request->answer1;
        $nuevo->answer2 =$request->answer2;
        $nuevo->answer3 =$request->answer3;
        $nuevo->password =$request->password;
        $nuevo->save();
        return redirect()->route('sites.index');
    }












}
