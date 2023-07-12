<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mslide;

class slide extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $image = md5(time()).'Pengurus'.$request->file('image')->getClientOriginalName();
        $path= $request->file('image')->storeAs('public/images', $image);
            Mslide::create([
                "page" => $request->page,
                "isi" => $request->isi,
                "img" =>$image]);
                return redirect('/profil');   
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
    public function edit(string $id)
    {
        //
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
        $slide = Mslide::where('id',$id)->first();
        unlink(storage_path('app/public/images/'.$slide->img));
        Mslide::where('id',$id)->delete();
        return redirect()->route('profil.index')->with('success', 'Berita berhasil dihapus!');
    }
}
