<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\produk;
use App\Models\Madmin;
class Admin extends Controller
{
    public function vlogin()
    {
      return view('login');
    }
       
    public function actlogin(Request $request)
    {
   
    $request->validate([
        'username' => 'required',
        'password' => 'required',
        'captcha'  =>'required|captcha'
        
    ]);

    $madmin = Madmin::where('username', $request->username)->first();

    if (! $madmin || ! Hash::check($request->password, $madmin->password)) {
        return redirect()->back()->with('salah', 'Username/password salah');
    }

    if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        return redirect('home');
    }

    return redirect()->back()->with('salah', 'Username/password salah'); }

    public function reload(){
        return response()->json(['captcha'=>captcha_img('math')]);
    }

    public function home(){
        return view('admin.layouts.dashboard');
    }

    public function out()
    {
        Auth::logout();
        return redirect('/login')->with('balik','berhasil logout');
    }

    public function profildesa(){
        return view('admin.Menu.profildesa');
    }

    
}
