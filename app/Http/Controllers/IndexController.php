<?php 


namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;


// FQN: App\Http\Controllers\IndexController
class IndexController extends Controller
{  
     
    public function index()
    {
        // return 'Hello, world! (from the index action of the IndexController)';
        $user = [
            'name' => 'Tom',
            'role' => 'admin'
        ];

         $results = DB::select('SELECT * FROM `movies` WHERE `id` = 1');
        
        // logic for displaying some page
        return view('index/index', [
            'my_variable'=> 'Hello, world', //creates variable in view
            'things_to_do' => [
                'one thin',
                'second thing'
            ],
            'user'=> $user,
            'results' => $results

        ]);
 
        // the response will be just '<h1>Title</h1>'





    }
};

