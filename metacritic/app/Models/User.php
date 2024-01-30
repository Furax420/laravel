<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'birth_date', 'is_admin'];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
