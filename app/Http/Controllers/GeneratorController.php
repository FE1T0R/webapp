<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    public function __invoke(){
//            $sites = Site::orderBy('id','desc')->paginate();
            return view('generator.generator');
//            return fake()->randomAscii();

    }


}
