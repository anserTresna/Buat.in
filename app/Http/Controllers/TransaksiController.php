<?php

namespace App\Http\Controllers;
use App\Models\checkout;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index () {
    $title = 'DATA BOOKING';
    $slug = 'databooking';
    $dataCheckout = checkout::all();
        return view('transaksi.index', 
                compact('dataCheckout', 'title', 'slug'));
    }

    public function destroy($id)
    {
        checkout::where('id',$id)
                ->delete();
            return redirect('/dashsell');
    }
}
