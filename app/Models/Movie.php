<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }


    public function types()
    {
        return $this->belongsTo(Type::class, 'movie_type_id');
    }

    public function country()
    {
        return $this->belongsToMany(Country::class, 'movie_origin_country', 'movie_id', 'movie_origin_country_id');
    }
}