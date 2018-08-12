<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = DB::table('movies')->get();

        return view('home', ['movies' => $movies]);
    }

    public function getMovieForm() {
        return view('movie/movie_form');
    }

    public function createMovie(Request $request){
        $movie = Movie::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'price' => Input::get('price')
        ));
        return redirect()->route('home')->with('success', 'Movie has been successfully added!');
    }
}
