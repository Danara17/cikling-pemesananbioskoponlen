<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        $response = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular');


        $movies = $response->json()['results'];

        return view('debug.tesapi', compact('movies'));
    }

    public function show($id)
    {
        $response = Http::withToken(config('services.tmdb.token'))
            ->get('movie/' . $id);

        $movie = $response->json();

        return view('movies.show', compact('movie'));
    }
}