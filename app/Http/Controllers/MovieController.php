<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $allMovies = Movie::all();
        return view('movie',compact('allMovies'));
    }
}
