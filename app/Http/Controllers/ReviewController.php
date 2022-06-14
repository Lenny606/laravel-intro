<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Review;

class ReviewController extends Controller
{
    //
    public function store()
    {
        $review = new Review;

        $review->movie_id = $_POST['movie_id'];
        $review->value    = $_POST['value'];
        $review->user_id    = $_POST['user_id'];

        $review->save();

        return redirect(url('/movies/shawshank-redemption'));
    }

    public function display()
    {   
        // $game_type = Movie::where('name', 'game')->first();

        // $game_type -> movies(); //select from 'movies' where movie type id =

        // $movie->genres->movie;

        $reviews = Review::where('movie_id', 111161)
                        ->get();
                        
        dd($reviews);
        //DB::select('SELECT * FROM `movies` ORDER BY `rating` LIMIT 10');

        return view('index/movies.detail', ['reviews'=>$reviews]);
    }
}
