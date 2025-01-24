<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function calculateBMI($weight, $height) {
        if ($weight < 0 || $height < 0) {
            return "<h1>Invalid weight and height</h1>";
        }
        $bmi = $weight / ($height * $height);
        return view('bmi', compact('bmi'));
    }
}
