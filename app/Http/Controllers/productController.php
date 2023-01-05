<?php

namespace App\Http\Controllers;



use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
        $dataProduct = product::all();
        return view('dataproduk.index', 
                compact('title', 'slug', 'dataProduct'));
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
        $dataProduct = product::all();
        return view('dataproduk.create', 
                compact('title', 'slug', 'dataProduct'));
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
        // $request->gambar->storeAs('public/gambarproduk', $file_name );
        // $images = $file_name;
        $this->validate($request, [
            'gambar' => 'required|image|mimes:jpg,png,jpeg,|max:2048',
        ]);

        // $image_path = $request->file("gambar")->store("buktiTransfer");
        if ($request->file("gambar"))
        {
            $data = $request->file("gambar")->store("gambarproduk");
        }
        $result = product::insert([
            'nama'=> $request->nama,
            'harga'=> $request->harga,
            'detail'=> $request->detail,
            'gambar'=> $data,
            
        ]);
        if($result){
            return redirect('/seller/product');
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
        $dataProduct = product::where('id','=', $id) 
                        ->first();
        return view('dataproduk.update',compact('title', 'slug','dataProduct'));
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
            return redirect('/seller/product/');
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
            return redirect('/seller/product');
    }
}
