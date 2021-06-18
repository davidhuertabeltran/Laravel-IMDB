<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class, 'movie_types');
    }

    public function country()
    {
        return $this->belongsToMany(Country::class, 'origin_countries');
    }
}
