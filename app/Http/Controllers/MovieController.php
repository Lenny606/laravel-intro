<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;
use App\Models\MoviePerson;



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
       

        $top50 = Movie::orderBy('rating')  //eloquent orm
                        ->limit('10')
                        ->get();
        
        //DB::select('SELECT * FROM `movies` ORDER BY `rating` LIMIT 10');

        return view('index/movies.top-rated', compact('top50'));
    }

    public function actionMovies()
    {
         $genre = Genre::where('name', 'action')->first(); //returns one record

         $movies = $genres->movie;

        // $game_type -> movies(); //select from 'movies' where movie type id =
        
        $query = "
        SELECT `movies`.*
        FROM `genre_movie`
        LEFT JOIN `movies`
            ON `genre_movie`.`movie_id` = `movies`.`id`
        WHERE `genre_movie`.`genre_id` = ?
            AND `votes_nr` >= ?
            AND `movie_type_id` = ?
        ORDER BY `rating` DESC
        LIMIT 50
    ";

    $movies = DB::select($query, [31, 5000, 1]);

    return view('movies.top-rated-genre', [
        'genre_name' => 'Action movies',
        'movies' => $movies
    ]);
    }

    public function shawshank()
    {

        $movie =  Movie::where('id', '=', '111161')
                  ->first();

                  //shorthand: Movie::findOrFail("111161") -generetas 404err if not find
                // DB::selectOne(
                // 'SELECT * FROM `movies` WHERE `id`=?', [111161]); 
       

        $cast = DB::select(
            'SELECT * FROM `movie_person`
             LEFT JOIN `people` ON `movie_person`.`person_id`= `people`.`id`
             WHERE `movie_person`.`movie_id`= ?', [$movie->id]); 
      
      //cast = MoviePerson::query()
           // ->leftJoin(what table, match , which table)
           // ->leftJoin('movie_person')
           // ->where()
           //->selectRaw()
            //-get()

            //other way use Right JOIN and swicth positions

        return view('index/movies.detail', [

            'movie' => $movie,
             'cast' => $cast,
              

        ]);
             
    }
    
    public function search()
    {    
        if (isset($_GET['search'])) {

            $name = $_GET['search'];
            $result = Movie::where('name', 'like', '%'.$name.'%');
            // DB::select('SELECT * FROM `movies` WHERE `name` LIKE ?', ['%'. $name.'%']);
            
             } else {
               
            $name = "";
            $result = []; //change to empty Collection 
             };
        

            
        
        return view('index/movies.search', [
            'name' => $name,
            'result' => $result
        ]);
    }
}
