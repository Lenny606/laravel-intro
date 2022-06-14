<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Review;

//Model of table `reviews`
class ReviewController extends Controller
{
    //method ,,action,, store() what handles post
    public function store()
    {
        //creates new isntance
        $review = new Review;

        //values from post req are saved as properties
        $review->movie_id = $_POST['movie_id'];
        $review->value    = $_POST['value'];
        $review->user_id    = $_POST['user_id'];

        $review->save(); //saves into DTB

        return redirect(url('/movies/shawshank-redemption')); //after save redirects to specified url... should be with ?id=XXX
    }

}
