<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
   
    protected $fillable = [
        'nama_produk',
        'judul_berita',
        'isi_berita',
        'image'
    ];
}
