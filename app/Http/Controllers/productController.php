<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'DataProduk';
        $slug = 'dataproduk';
        $dataProducts = product::all();
        return view('dataproduk.index', 
                compact('title', 'slug', 'dataProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = ' Tambah Product';
        $slug = 'dataproduk';
        $dataProducts = product::all();
        return view('dataproduk.create', 
                compact('title', 'slug', 'dataProducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = $request->gambar->getClientOriginalName();
        $request->gambar->store('public.gambarproduk');
        $gambar = $file_name;

        $result = product::insert([
            'nama'=> $request->nama,
            'harga'=> $request->harga,
            'detail'=> $request->detail,
            'gambar'=> $request->gambar,
            'timestamps' => now()
        ]);
        if($result){
            return redirect('/dataproduk');
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
        $title = 'Perbaharui data Produk';
        $slug = 'dataproduk';
        $dataProducts = product::where('id','=', $id) 
                        ->first();
        return view('dataproduk.update',compact('title', 'slug','dataProducts'));
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
        $id = $request->id;
        product::where('nama', $id)
                ->update([
                    'harga'=> $request->harga,
                    'detail'=> $request->detail,
                    'gambar'=> $request->gambar,
                ]);
            return redirect('/dataproduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::where('id',$id)
                ->delete();
            return redirect('/dataproduk');
    }
}
