<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class akadController extends Controller
{
    public function index () {
    $dataProduct = product::all();
        return view('daftarproduk.akad', 
                compact('dataProduct'));
    }

    
}
