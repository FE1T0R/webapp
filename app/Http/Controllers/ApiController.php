<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller{
    public function users(Request $request){
        $users = User::all();
        return response()->json($users);
    }
    
    public function loginbueno(Request $request){
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
            $response['msg'] = "User not Found";
        }
        return response()->json($response);
    }


    public function login(Request $request){
        $response = ['status'=>0,'msg'=>''];
        $data = json_decode($request->getContent());
        $user = User::where('email',$data->email)->first();
        /*
        if($user){
            if(Hash::check($data->password,$user->password)){
                $token = $user->createToken('example');
                $response['status'] = 1;
                $response['msg'] = $token->plainTextToken;
            }else{
                $response['msg'] = "Credentials wrong";
            }

        }else{
            $response['msg'] = "User not Found";
        }*/
        //return response()->json($response);
    
        return response()->json($user);
    }

    public function sites(Request $request){
        $sites = Site::all();
        return response()->json($sites);
    }



}

