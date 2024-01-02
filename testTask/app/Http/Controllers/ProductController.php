<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return response()->json(['data' => 'Welcome to the Product API.'], 200);
    }
}
