<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $movies = Movie::all();


        if (empty($movies)) {
            abort("404");
        }
        // dump($movies);

        return view('home', compact('movies'));
    }
}
