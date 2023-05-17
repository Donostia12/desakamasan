<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;
class Madmin extends AuthenticatableUser implements Authenticatable
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = [
        'username',
        'password'
    ];
}
