<?php

namespace App\Http\Controllers;
use App\Models\checkout;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index () {
    $dataCheckout = checkout::all();
        return view('checkout.chart', 
                compact('dataCheckout'));
    }
}
