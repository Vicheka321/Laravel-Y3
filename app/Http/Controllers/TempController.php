<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function convert($f){
        $c = ($f - 32) * 5/9;
        return "<h1>celcius = $c</h1>";
    }

}
