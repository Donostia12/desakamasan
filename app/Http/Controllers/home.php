<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\daerahwisata;
use App\Models\produk;
use App\Models\profildesa;
use App\Models\pengurus;
use App\Models\menubuilder;
use Illuminate\Http\Request;


class home extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $menubuilder = menubuilder::where('id',1)->first();
        $profildesa = profildesa::where('id_profildesa',1)->first();
        $produk = produk::get();
        $pengurus = pengurus::get();
        $daerahwisata = daerahwisata::all();
        $berita = berita::orderBy('created_at','desc')->paginate(5);
       return view('Client.home', compact('produk','pengurus','berita','profildesa','menubuilder','daerahwisata'));
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

    public function detailberita(string $id)
    {
        $berita = berita::where('id_berita',$id)->first();
        return view('Client.detailberita',compact('berita'));
    }

    public function detaildaerahwisata(string $id)
    {
        $daerahwisata = daerahwisata::where('id',$id)->first();
        return view('Client.detaildaerahwisata',compact('daerahwisata'));
    }
}
