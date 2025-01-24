<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = ProductModel::all();
        return view('product.index', compact('product'));
    }
}
