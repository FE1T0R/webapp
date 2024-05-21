<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function sign_in(Request $credentials)
    {
        $credentials->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = request()->only('email','password');

        
        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect()->route('sites.index')->with('alerts','welcome');
        }else{
            //return redirect(route('auth.form.sign_in'))->withErrors($request, 'login');
            //return redirect(route('auth.form.sign_in'));

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
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
            'name' => ['required', 'max:255', 'alpha:ascii'],
            'lastname' => ['required', 'max:255'],
            'email' => ['required', 'max:255','unique:users'],
            'username' => 'required',
            'phone' => 'required',
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'answer1' => 'required',
            'answer2' => ['required', 'max:255'],
            'answer3' => 'required',
            'password' => ['required','min:12', 'max:255' ]
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
        return redirect()->route('sites.index')->with('alerts','verify');
    }

    public function recover()
    {
        return redirect(route('loyouts.recover_pass'));
    }

}
