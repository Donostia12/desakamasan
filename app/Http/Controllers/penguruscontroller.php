<?php

namespace App\Http\Controllers;
use App\Models\pengurus;
use Illuminate\Http\Request;

class penguruscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Pengurus = pengurus::all();
        return view('admin.Menu.Pengurus', compact('Pengurus'));
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
            'jabatan'=>['required', 'string', 'max:120'],
            'whatsapp'=>['required', 'string', 'max:120'],
            'email'=>['required', 'string', 'max:120'],
            'image'=>['required']
        ]);

        if ($request->hasFile('image')) {
            $image = md5(time()).'Pengurus'.$request->file('image')->getClientOriginalName();
            $path= $request->file('image')->storeAs('public/images', $image);
            pengurus::create([
            "nama" => $request->nama,
            "jabatan" => $request->jabatan,
            "whatsapp" => $request->whatsapp,
            "email" => $request->email,
            "image" => $image
            ]);
        }else { 
            pengurus::create([
                "nama" => $request->nama,
                "jabatan" => $request->jabatan,
                "whatsapp" => $request->whatsapp,
                "email" => $request->email,
            "image"=> ''
            ]);
        }
       
        return redirect()->route('pengurus.index')->with('success', 'Berita berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengurus = pengurus::where('id',$id)->first();
        return view('admin.Menu.editpengurus',compact('pengurus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengurus = pengurus::where('id',$id)->first();
       

        if ($request->hasFile('image')) {
            $image = md5(time()).'Pengurus'.$request->file('image')->getClientOriginalName();
            $path= $request->file('image')->storeAs('public/images', $image);
            pengurus::where('id',$id)->update([
            "nama" => $request->nama,
            "jabatan" => $request->jabatan,
            "whatsapp" => $request->whatsapp,
            "email" => $request->email,
            "image" => $image
            ]);
               
        return redirect()->route('pengurus.index')->with('success', ' berhasil diedit!');
        
        }else { 
            pengurus::where('id',$id)->update([
                "nama" => $request->nama,
                "jabatan" => $request->jabatan,
                "whatsapp" => $request->whatsapp,
                "email" => $request->email,
            ]);
               
        return redirect()->route('pengurus.index')->with('success', ' berhasil diedit!');
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengurus = pengurus::where('id',$id)->first();
        unlink(storage_path('app/public/images/'.$pengurus->image));
        pengurus::where('id',$id)->delete();
        return redirect()->route('pengurus.index')->with('success', 'Berita berhasil dihapus!');
    }

    public function detail($id){
        $data = berita::where('id_berita',$id)->first();
        return response()->json($data);
    }
}
