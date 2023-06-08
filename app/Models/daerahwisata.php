<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daerahwisata extends Model
{
    use HasFactory;
    protected $table = 'daerahwisata';
    protected $fillable = [
        'nama',
        'deskripsi',
        'image',
        'maps'
    ];
}
