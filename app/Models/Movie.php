<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieType;
use App\Models\Genre;

class Movie extends Model
{
    
    use HasFactory;
    public function movieType()

    {
        return $this->belongsTo(MovieType::class);
    }

    public function genres()

    {
        return $this->belongsToMany(Genre::class);
    }

    //relatoinship with review
    public function reviews()

    {
        return $this->hasMany(Review::class);
    }

}
