<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productlistController extends Controller
{
    public function produclist(){
        return view('productlist');
    }
}
