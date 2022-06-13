<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function topRated()
    {
        $top50games = DB::select('SELECT * FROM `movies` WHERE `movie_type_id` = 7 ORDER BY `rating` DESC LIMIT 50');

        return view('index/games.top-rated',[ 
            'top50games' => $top50games
        ]);
    }
}
