<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menubuilder extends Model
{
    use HasFactory;
    protected $table = 'menubuilder';
    protected $fillable = [
    'k1',
    'k2',
    'k3',
    'k4'
    ];
}
