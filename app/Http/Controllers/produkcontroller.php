<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = produk::all();
        return view('admin.Menu.produk',["produk"=>$produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.Menu.Vtambahproduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        produk::create([
        "nama_produk" => $request->nama_produk,
        "informasi_produk" => $request->informasi_produk,
        "harga_produk" => $request->hargaproduk,
        "map" => $request->map
        ]);
        return redirect('/Produk');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produk $produk)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        //
    }
}
