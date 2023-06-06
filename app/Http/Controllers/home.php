<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\profildesa;
use App\Models\pengurus;
use Illuminate\Http\Request;

class home extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil = profildesa::get();
        $produk = produk::get();
        $pengurus = pengurus::get();
       return view('Client.home', compact('produk','profil','pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function detail(string $id)
    {
        $produk = produk::find($id);
        return view('Client.Detailproduk',[
            "produk" =>$produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
