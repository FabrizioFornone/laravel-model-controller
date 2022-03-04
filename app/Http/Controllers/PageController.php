<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        return view('layout.home');
    }

    public function movies()
    {

        $movies = Movie::all();


        if (empty($movies)) {
            abort("404");
        }

        return view('movies', compact('movies'));
    }
}
