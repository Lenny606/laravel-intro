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

    { //relation with types 1:n
        return $this->belongsTo(MovieType::class);
    }

    //relation with genres n:m
    public function genres()

    {
        return $this->belongsToMany(Genre::class);
    }

    //relatoinship with review 1:n
    public function reviews()

    {
        return $this->hasMany(Review::class);  //1"n = movie has meny reviews
    }

}
