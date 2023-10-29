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
//
//    public function login(Request $request){
//        $response = ['status'=>0,'msg'=>''];
//        $data = json_decode($request->getContent());
//
//
////        $credentials = request()->only('email','password');
//        if(Auth::attempt($data)){
////            \request()->session()->regenerate();
////            return redirect(route('sites.index'));
////            $token = $data->createToken('Example');
//            $response['status'] = 1;
////            $response['msg'] = $token->plainTextToken;
//            return "conection ok";
//        }else{
////            return redirect(route('auth.form.sign_in'));
////            $response['msg'] = 'Credenciales Incorrectas';
//        }
//    }

    public function login(Request $request){
        $response = ['status'=>0,'msg'=>''];
        $data = json_decode($request->getContent());
        $user = User::where('email',$data->email)->first();
        if($user){
            if(Hash::check($data->password,$user->password)){
                $token = $user->createToken('example');
                $response['status'] = 1;
                $response['msg'] = $token->plainTextToken;
            }else{
                $response['msg'] = "Credentials wrong";
            }

        }else{
            $response['msg'] = "User Found";
        }
        return response()->json($response);
    }

}

