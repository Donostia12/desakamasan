<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
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

    $javascript = "<script> alert('Terimakasih Atas Masukannya');</script>";
    $request->validate([
        'captcha'  =>'required|captcha'
    ]);
        Mreview::create([
            "nama" => $request->nama,
            "review" => $request->review,
            ]);
        return redirect()->route('index')->with('success', $javascript);
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
       
    }
    public function perbarui(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required',
            'review' => 'required',
            'status' => 'required',
        ]);

        $id = $request->id ;
        $review = Mreview::find($id);
        $review->status = $request->status;
        $review->save();
           
    return redirect()->route('review.index')->with('success', ' berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Mreview::where('id',$id)->first();
        Mreview::where('id',$id)->delete();
        return redirect('/review');
    }
    public function detail($id){
        $data = Mreview::where('id',$id)->first();
        return response()->json($data);
    }
}
