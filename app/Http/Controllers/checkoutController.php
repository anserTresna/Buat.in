<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $dataCheckout = checkout::all();
        // return view('checkout.checkout', 
        // compact('dataCheckout'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file_name = $request->gambar->getClientOriginalName();
        // $request->gambar->storeAs('buktiTransfer', $file_name );
        // $images = $file_name;
        $this->validate($request, [
            'gambar' => 'required|image|mimes:jpg,png,jpeg,|max:2048',
        ]);

        // $image_path = $request->file("gambar")->store("buktiTransfer");
        if ($request->file("gambar"))
        {
            $data = $request->file("gambar")->store("buktiTransfer");
        }
        $result = checkout::insert([
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'tanggal'=> $request->tanggal,
            'gambar'=> $data,
            'paket'=> $request->paket,
            'order_notes'=> $request->order_notes,
            
        ]);
        if($result){
            return redirect('/cart');
        }else{
            return $this->create();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
