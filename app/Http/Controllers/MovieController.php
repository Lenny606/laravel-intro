<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MovieController extends Controller
{
    //
    public function topRated()
    {
        $top50 = DB::select('SELECT * FROM `movies` ORDER BY `rating` LIMIT 10');

        return view('index/movies.top-rated', [
        'top50' => $top50
        ]);
    }

    public function shawshank()
    {
        $shawshank = DB::select(
            'SELECT * FROM `movies`
             LEFT JOIN `movie_person` ON `movies`.`id`= `movie_person`.`movie_id`
             WHERE `movies`.`id`=111161'); 

        return view('index/movies.detail', [

            'shawshank' => $shawshank
          

        ]);
        

        
    }

}
