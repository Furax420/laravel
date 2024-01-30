<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Définissez les champs qui peuvent être attribués en masse
    protected $fillable = ['title', 'release_year', 'director_id'];

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
