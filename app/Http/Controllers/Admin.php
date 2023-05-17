<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
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
    ]);

    $madmin = Madmin::where('username', $request->username)->first();

    if (! $madmin || ! Hash::check($request->password, $madmin->password)) {
        return redirect()->back()->with('salah', 'Username/password salah');
    }

    if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        return redirect('home');
    }

    return redirect()->back()->with('salah', 'Username/password salah'); }

    public function home(){
        return view('admin.layouts.layoutsadmin');
    }

    public function out()
    {
        Auth::logout();
        return redirect('/login')->with('balik','berhasil logout');
    }
}
