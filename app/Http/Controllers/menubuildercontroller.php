<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menubuilder;
class menubuildercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = menubuilder::where('id',1)->first();
        return view('admin.Menu.menubuilder', compact('data'));
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
        menubuilder::where('id',1)->update([
            "k1" => $request->k1,
            "k2" => $request->k2,
            "k3" => $request->k3,
            "k4" => $request->k4
        ]);
        return redirect('/menubuilder');
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
        //
    }
}
