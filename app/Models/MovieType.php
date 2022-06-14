<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class MovieType extends Model
{
    use HasFactory;
   
    public function movies()  //one movie type has many movies
{
    return $this->hasMany(Movie::class); //same as App\Models\Movie
}
}
