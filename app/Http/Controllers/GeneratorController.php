<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site;
use Psy\Util\Str;
use function Webmozart\Assert\Tests\StaticAnalysis\lower;
use function Webmozart\Assert\Tests\StaticAnalysis\natural;


class GeneratorController extends Controller
{
    public function index(){
        $passlength = 0;
        return view('generator.generator',compact('passlength'));
    }
    public function create(Request $request){
//        $cap = fake()->randomElement(['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','V','X','Y','Z']);
//        $low = fake()->randomElement(['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','x','y','z']);
//        $char = fake()->randomElement(['!','"','#','%','&','/','(','$',')','=','?','¡','¡','¿',"\'",'[',']','{','}','-','*','+','.','_',' ',';',':','Ñ','ñ']);
//        $num = fake()->randomElement(['1','2','3','4','5','6','7','8','9','0']);

        $cap = "";
        $low = "";
        $char = "";
        $num = "";
        $passlength = 0;
        for($i = 1; $i <= $request->qcapital;$i ++){
            if($request->capital == true) {
                $cap = $cap . fake()->randomElement(['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','V','X','Y','Z']);
                $passlength += $request->qcapital;
            }else{$cap = "";}
        }
        for($i = 1; $i <= $request->qlower;$i ++){
            if($request->lower == true) {
                $low = $low . fake()->randomElement(['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','x','y','z']);
                $passlength += $request->qlower;
            }else{$low = "";}
        }
        for($i = 1; $i <= $request->qnumber;$i ++){
            if($request->number == true) {
                $num = $num . fake()->randomElement(['1','2','3','4','5','6','7','8','9','0']);
                $passlength += $request->qnumber;
            }else{$num = "";}
        }
        for($i = 1; $i <= $request->qcharacter;$i ++){
            if($request->character == true) {
                $char = $char . fake()->randomElement(['!','"','#','%','&','/','(','$',')','=','?','|','[',']','{','}','-','*','+','.','_',' ',';',':']);
                $passlength += $request->qcharacter;
            }else{$char = "";}
        }

        $createdPass = str_shuffle($low.$cap.$num.$char);
        return view('generator.generator',compact(['passlength','createdPass']));


//        return $request->character;
    }




}
