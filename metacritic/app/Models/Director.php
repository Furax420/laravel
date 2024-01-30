<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = ['first_name', 'last_name', 'country_id'];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
