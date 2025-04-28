<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomUser extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
