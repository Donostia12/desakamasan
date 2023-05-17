<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berita extends Controller
{
    public function berita(){
        $data['berita'] = view('admin.Menu.berita');
        return view('admin.homeadmin')->with($data);
      }
}
