<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //dd($movies);
        return view('welcome', compact('movies'));
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function news()
    {
        return view('news');
    }
}
