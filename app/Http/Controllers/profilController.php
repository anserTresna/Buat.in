<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\User;


class profilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $title = 'Profil';
       $slug = 'profil';
       $dataUsers = User::all();
       return view('profil.index',compact('title', 'slug', 'dataUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = profil::insert([
            'email' => $request->email,
            'nama_lengkap' => $request->nama,
            'alamat' => $request->alamat,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
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
        $title = 'Perbarui Data Profil';
        $slug = 'Profil';
        $dataUsers = User::findorFail($id);
        return view('profil.setting',compact(['title','slug','dataUsers']));
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
        $dataUsers = User::findOrfail($id);
        $dataUsers->update($request->all());

    
        return redirect('/admin/profil');
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
