<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mreview extends Model
{
    protected $table = 'review';
    protected $fillable = [
        'nama',
        'review',
        'status'
    ];
    use HasFactory;
}
