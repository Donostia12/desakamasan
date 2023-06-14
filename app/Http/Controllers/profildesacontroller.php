<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profildesa;

class profildesacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = profildesa::where('id_profildesa',1)->first();
        return view('admin.Menu.profildesa', compact('data'));
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
        //
        profildesa::where('id_profildesa',1)->update([
            "welcome" => $request->welcome,
            "isi_profil" => $request->isi_profil,
            "video" => $request->video
        ]);
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
    public function update(Request $request,string $id )
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
