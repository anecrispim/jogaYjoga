<?php

namespace App\Http\Controllers;

use App\Models\KillBirdModel;
use Illuminate\Http\Request;

class KillBirdController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {

        return view('kill_the_bird');
    }


    public function detail(Request $request)
    {

        $score = $request->score;
        $score_int = intval($score);
        $input =array();
        $input['score']=$score_int;

        $score_store = KillBirdModel::create($input);
    }

}
