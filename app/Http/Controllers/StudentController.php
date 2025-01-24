<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return "<h1>We're StudentController index method</h1>";
    }

    public function calc($x, $y) {
        $total = $x + $y;
        return "<h1>total = $total</h1>";
    }

}
