<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'nama_produk',
        'informasi_produk',
        'harga_produk',
        'map',
        'kategori',
        'image'
    ];
}
