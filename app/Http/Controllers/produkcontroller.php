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
        if ($request->hasFile('image')) {
            $image = md5(time()).'DesaKamasan'.$request->file('image')->getClientOriginalName();
            $path= $request->file('image')->storeAs('public/images', $image);
            produk::create([
            "nama_produk" => $request->nama_produk,
            "informasi_produk" => $request->informasi_produk,
            "harga_produk" => $request->hargaproduk,
            "kategori" =>$request->kategori,
            "map" => $request->map,
            "image"=> $image
            ]);
        }else {
            
            produk::create([
            "nama_produk" => $request->nama_produk,
            "informasi_produk" => $request->informasi_produk,
            "harga_produk" => $request->hargaproduk,
            "kategori" =>$request->kategori,
            "map" => $request->map,
            "image"=> ''
            ]);
        }
       
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
    public function edit($id)
    {
        $produk = produk::find($id);
        return view('admin.Menu.editproduk',[
            "produk" =>$produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk = produk::where('id',$id)->first();
          if ($request->hasFile('image')) {
              $image = md5(time()).'DesaKamasan'.$request->file('image')->getClientOriginalName();
              $path= $request->file('image')->storeAs('public/images', $image);
              produk::where('id',$id)->update([
                  "nama_produk" => $request->nama_produk,
                  "informasi_produk" => $request->informasi_produk,
                  "harga_produk" => $request->hargaproduk,
                  "kategori" =>$request->kategori,
                  "map" => $request->map,
                  "image" => $image

                  ]);
                unlink(storage_path('app/public/images/'.$produk->image));
          }
          else {
            produk::where('id',$id)->update([
                "nama_produk" => $request->nama_produk,
                "informasi_produk" => $request->informasi_produk,
                "harga_produk" => $request->hargaproduk,
                "kategori" =>$request->kategori,
                "map" => $request->map,
                
                ]);
          }
            return redirect('/Produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = produk::where('id',$id)->first();
        unlink(storage_path('app/public/images/'.$produk->image));
        produk::where('id',$id)->delete();
        return redirect('/Produk');
    }

    public function detail($id){
        $data = produk::find($id);
        return response()->json($data);
    }

   
}
