<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Site;

class GeneratorController extends Controller
{
    public function index(){
        $passlength = 0;
        return view('generator.generator',compact('passlength'));
    }
    public function create(Request $request)
    {
        $passlength = $this->generator($request)['passlength'];
        $createdPass = $this->generator($request)['createdPass'];
        return view('generator.generator',compact(['passlength','createdPass']));
    }
    public function editPass(Site $site)  // ORIGINAL
    {
        $site = $this->require($site);
        return view('sites.edit',compact('site'));
    }
    
    public function show(Request $request)  // ORIGINAL
    {
        $passlength = $this->generator($request)['passlength'];
        $createdPass = $this->generator($request)['createdPass'];
        return view('sites.create',compact('createdPass'));
    }
    /*
    public function editPass(Site $site)
    {
        $site = $this->require($site);
        return $site;
    }*/
    public function createPass()
    {
        $site= new Site();
        $site->password_s = $this->require($site)['password_s'];
        $createdPass = $site->password_s;
//        $site = $this->require($site);
        return view('sites.newsite',compact('createdPass'));
//        return $site->password_s;
    }
    public function require(Site $site)
    {
        $new = new Request;
        $new->capital = false;
        $new->lower = false;
        $new->number = false;
        $new->character = false;
        $new->qcapital = 3;
        $new->qlower = 3;
        $new->qnumber = 3;
        $new->qcharacter = 3;

        $site->password_s = $this->generator($new)['createdPass'];
//        return redirect()->route('sites.edit',compact(['id_site','site']));
//        return view('sites.edit',compact('site');
        return $site;
    }


    public function generator(Request $request){
        $cap = "";
        $low = "";
        $char = "";
        $num = "";
        $passlength = 0;
//
        // capital case
        if($request->capital == false){
            $passlength = $passlength + $request->qcapital;
            for($i = 1; $i <= $request->qcapital;$i ++){
                $cap = $cap . fake()->randomElement(['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','V','X','Y','Z']);
            }
        }else{$cap = "";}
        // lower case
        if($request->lower == false) {
        $passlength = $passlength + $request->qlower;
            for($i = 1; $i <= $request->qlower;$i ++){
                $low = $low . fake()->randomElement(['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','x','y','z']);
            }
        }else{$low = "";}
        // number case
        if($request->number == false) {
            $passlength = $passlength + $request->qnumber;
            for($i = 1; $i <= $request->qnumber;$i ++){
               $num = $num . fake()->randomElement(['1','2','3','4','5','6','7','8','9','0']);
            }
        }else{$num = "";}

        //character case
        if($request->character == false) {
            $passlength = $passlength + $request->qcharacter;
            for($i = 1; $i <= $request->qcharacter;$i ++){
               $char = $char . fake()->randomElement(['!','"','#','%','&','/','(','$',')','=','?','|','[',']','{','}','-','*','+','.','_',' ',';',':']);
            }
        }else{$char = "";}

        $createdPass = str_shuffle($low.$cap.$num.$char);
//        return view('generator.generator',compact(['passlength','createdPass']));
        return compact(['passlength','createdPass']);
    }

    private static $secretKey = "mododeencriptacion123sad2asd12sa1d2as1d23as1d2sa1d23as1d23sa123dsa54d4sa56d789s7ad89ad21das4d564q7re8e78gf7d";
    private static $secretIv = '123123121asdasd545as4d6asd';
    private static $encryptMethod = "AES-256-CBC";

    public static function tokenencrypt($data)
    {
        $key = hash('sha256', self::$secretKey);
        $iv = substr(hash('sha256', self::$secretIv), 0, 16);
        $result = openssl_encrypt($data, self::$encryptMethod, $key, 0, $iv);
        return $result = base64_encode($result);
    }
    public static function tokendecrypt($data)
    {
        $key = hash('sha256', self::$secretKey);
        $iv = substr(hash('sha256', self::$secretIv), 0, 16);
        $result = openssl_decrypt(base64_decode($data), self::$encryptMethod, $key, 0, $iv);
        return $result;
    }



}
