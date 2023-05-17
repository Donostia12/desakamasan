<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berita extends Controller
{
    public function berita(){
        return view('admin.Menu.berita');
      }
}
