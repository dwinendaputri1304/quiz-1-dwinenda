<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Kategori::all();
        return view('kategori.index', compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori= new Kategori();
        $kategori->kategori_nama = $request->kategori_nama;
        $kategori->kategori_text = $request->kategori_text;
        $kategori->created_at = $request->created_at;
        $kategori->updated_at = $request->updated_at;
        $kategori->save();
         return redirect('/kategori'); 
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
        $row = Kategori::findOrFail($id);
        return view('kategori.edit', compact("row"));
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
         $row = Kategori::FindOrFail($id);
        $row->update([   
        'kategori_nama' => request ('kategori_nama'),   
        'kategori_text' => request ('kategori_text'),
        'created_at' =>  request ('created_at'),
        'updated_at' => request ('updated_at')]); 
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Kategori::findOrFail($id);
        $row->delete();
        return redirect('/kategori');
    }
}

