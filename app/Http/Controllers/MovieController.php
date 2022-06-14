<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;


class MovieController extends Controller
{
    //
    public function index()
    {  //eloquent ORM
        $movies = Movie::orderBy('name')// FROM `movies` ORDER BY `name` ASC
                  ->where('name', '!=', '')   //doesnt equal to empty string
                  ->limit(20)                 // LIMIT 20
                  ->where('name', 'like', 'a%' ) // AND is automaticaly added
                  ->get();                    // SELECT

             return view('index/movies.index', compact('movies'));
    }

    


    public function topRated()
    {
        $top50 = DB::select('SELECT * FROM `movies` ORDER BY `rating` LIMIT 10');

        return view('index/movies.top-rated', [
        'top50' => $top50
        ]);
    }

    public function shawshank()
    {

        $movie =  Movie::where('id', '=', '111161')
                  ->first();
                // DB::selectOne(
                // 'SELECT * FROM `movies` WHERE `id`=?', [111161]); 
         

        $cast = DB::select(
            'SELECT * FROM `movie_person`
             LEFT JOIN `people` ON `movie_person`.`person_id`= `people`.`id`
             WHERE `movie_person`.`movie_id`= ?', [$movie->id]); 
      


        return view('index/movies.detail', [

            'movie' => $movie,
             'cast' => $cast   

        ]);
             
    }
    
    public function search()
    {    
        if (isset($_GET['search'])) {

            $name = $_GET['search'];
            $result = DB::select('SELECT * FROM `movies` WHERE `name` LIKE ?', ['%'. $name.'%']);
            
             } else {
               
            $name = "";
            $result = [];
             };
        

            
        
        return view('index/movies.search', [
            'name' => $name,
            'result' => $result
        ]);
    }
}
