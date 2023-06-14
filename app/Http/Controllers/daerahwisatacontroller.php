<?php

namespace App\Http\Controllers;
use App\Models\daerahwisata;
use Illuminate\Http\Request;

class daerahwisatacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {     $daerahwisata = daerahwisata::all();
        return view('admin.Menu.daerahwisata',compact('daerahwisata'));
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
        $request->validate([
            'nama'=>['required', 'string', 'max:255'],
            'deskripsi'=>['required', 'string'],
            'image'=>['required'],
            'maps'=>['required'],
        ]);

        if ($request->hasFile('image')) {
            $image = md5(time()).'daerah'.$request->file('image')->getClientOriginalName();
            $path= $request->file('image')->storeAs('public/images', $image);
            daerahwisata::create([
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
            "image"=> $image,
            "maps"=>$request->maps
            ]);
        }else {
            
            daerahwisata::create([
                "nama" => $request->nama,
                "deskripsi" => $request->deskripsi,
                "image"=> '',
                "maps"=>$request->maps
            ]);
        }
       
        return redirect()->route('daerahwisata.index')->with('success', 'Berita berhasil ditambah!');
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
        $daerahwisata = daerahwisata::find($id);
        return view('admin.Menu.editdaerahwisata',[
            "daerahwisata" =>$daerahwisata
        ]); 
    }  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $daerahwisata = daerahwisata::find($id);
        $request->validate([
            'nama'=>['required', 'string', 'max:255'],
            'deskripsi'=>['required', 'string'],
            'maps'=>['required'],
        ]);

        if ($request->hasFile('image')) {
            $image = md5(time()).'daerah'.$request->file('image')->getClientOriginalName();
            $path= $request->file('image')->storeAs('public/images', $image);
            daerahwisata::where('id',$id)->update([
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
            "image"=> $image,
            "maps"=>$request->maps
            ]);
            unlink(storage_path('app/public/images/'.$daerahwisata->image));
        }else {
            
            daerahwisata::where('id',$id)->update([
                "nama" => $request->nama,
                "deskripsi" => $request->deskripsi,
                "image"=> '',
                "maps"=>$request->maps
            ]);
        }
        return redirect()->route('daerahwisata.index')->with('success', 'Daerah Wisata berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $daerah = daerahwisata::where('id',$id)->first();
        unlink(storage_path('app/public/images/'.$daerah->image));
        daerahwisata::where('id',$id)->delete();
        return redirect()->route('daerahwisata.index')->with('success', 'Berita berhasil dihapus!');
    }
    public function detail($id){
        $data = daerahwisata::where('id',$id)->first();
        return response()->json($data);
    }
}
