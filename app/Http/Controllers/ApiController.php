<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller{
    public function users(Request $request){
        $users = User::all();
        return response()->json($users);
    }
    public function login2(Request $request){
        $response = ['status'=>0,'msg'=>''];
        $data = json_decode($request->getContent());


//        $credentials = request()->only('email','password');
        if(Auth::attempt($data)){
//            \request()->session()->regenerate();
//            return redirect(route('sites.index'));
            $token = $data->createToken('Example');
            $response['status'] = 1;
            $response['msg'] = $token->plainTextToken;
        }else{
//            return redirect(route('auth.form.sign_in'));
            $response['msg'] = 'Credenciales Incorrectas';
        }


//
    }
}

