<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'origin_countries';

    public function movie()
    {
        return $this->belongsToMany(Movie::class);
    }
}
