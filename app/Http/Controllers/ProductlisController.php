<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductlisController extends Controller
{
    public function index () {
    $slug = 'productlist';
    $dataProduct = product::all();
        return view('productlist.index', 
                compact('dataProduct', 'slug'));
}
}
