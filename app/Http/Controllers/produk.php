<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class produk extends Controller
{
  public function produk(){
    $data['produk'] = view('admin.Menu.produk');
    return view('admin.homeadmin')->with($data);
  }
}
 