<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\VerificationMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    /// AUTH FUNCTION - SIGN IN 
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


    /// AUTH FUNCTION - LOG OUT
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
        event(new Registered($nuevo));
        //Mail::to(Auth::user())->send(new VerificationMail(Auth::user())); 
        //return redirect()->route('sites.index')->with('alerts','verify');
    }

    public function emailNotification(){
        return view('auth.verify-email');
    }

    public function emailVerification (EmailVerificationRequest $request) {
        $request->fulfill();
        //return redirect('/home');
        return redirect()->route('sites.index')->with('alerts','verify');
    }

    public function resendEmailVerification(Request $request) {
        $request->user()->sendEmailVerificationNotification();
     
        return back()->with('message', 'Verification link sent!');
    }

    public function recover()
    {
        return view('emails.recover_pass');
    }

}
