<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = berita::all();
        return view('admin.Menu.berita',compact('berita'));
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
    {
        $request->validate([
            'judul_berita'=>['required', 'string', 'max:255'],
            'isi_berita'=>['required', 'string'],
            'image'=>['required']
        ]);

        if ($request->hasFile('image')) {
            $image = md5(time()).'Berita'.$request->file('image')->getClientOriginalName();
            $path= $request->file('image')->storeAs('public/images', $image);
            berita::create([
            "judul_berita" => $request->judul_berita,
            "isi_berita" => $request->isi_berita,
            "image"=> $image
            ]);
        }else {
            
            berita::create([
            "judul_berita" => $request->judul_berita,
            "isi_berita" => $request->isi_berita,
            "image"=> ''
            ]);
        }
       
        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = berita::where('id_berita',$id)->first();
        return view('admin.Menu.editberita',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $berita = berita::where('id_berita',$id)->first();
        $request->validate([
            'judul_berita'=>['required', 'string', 'max:255'],
            'isi_berita'=>['required', 'string'],
        ]);
        
            if ($request->hasFile('image')) {
                $image = md5(time()).'Berita'.$request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/images', $image);
                berita::where('id_berita',$id)->update([
                    "judul_berita" => $request->judul_berita,
                    "isi_berita" => $request->isi_berita,
                    "image"=> $image
                    ]);
                unlink(storage_path('app/public/images/'.$berita->image));
            }
            else {
              berita::where('id_berita',$id)->update([
                    "judul_berita" => $request->judul_berita,
                    "isi_berita" => $request->isi_berita
                  ]);
            }
            return redirect()->route('berita.index')->with('success', 'Berita berhasil diedit!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = berita::where('id_berita',$id)->first();
        unlink(storage_path('app/public/images/'.$berita->image));
        berita::where('id_berita',$id)->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }

    public function detail($id){
        $data = berita::where('id_berita',$id)->first();
        return response()->json($data);
    }
}
