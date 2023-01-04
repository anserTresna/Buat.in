<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productdetailsController extends Controller
{
    public function index (){
        return view('productdetails.index');
    }
}
