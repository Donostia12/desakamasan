<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mslide extends Model
{
    use HasFactory;
    protected $table ="mainslide";
    protected $fillable = [
      'page',
      'isi',
      'img'
    ];

}
