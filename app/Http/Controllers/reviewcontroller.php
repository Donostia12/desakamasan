<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mreview;

class reviewcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $data = Mreview::all();
        return view('admin.Menu.review', compact('data'));
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

    $javascript = '<script>scrollToReview();</script>';
    $request->validate([
        'captcha'  =>'required|captcha'
    ]);
        Mreview::create([
            "nama" => $request->nama,
            "review" => $request->review,
            ]);
        return redirect()->route('index')->with('script', $javascript);
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
