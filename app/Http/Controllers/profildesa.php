<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profildesa extends Controller
{
    public function profildesa(){
        $data['profildesa'] = view('admin.Menu.profildesa');
        return view('admin.homeadmin')->with($data);
      }
}
