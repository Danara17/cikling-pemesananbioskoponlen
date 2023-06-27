<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Film;
use App\Models\JadwalTayang;
use App\Models\Pemesanan;

use function GuzzleHttp\Promise\all;

class HalamanController extends Controller
{
    public function showLoginPage()
    {
        return view('login.login');
    }

    public function showHomePage()
    {

        $movies = Film::all();

        $response2 = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/upcoming');
        $soon = $response2->json()['results'];

        return view('beranda.home', compact('movies', 'soon'));
    }

    public function showPlayingNow()
    {

        $movie = Film::all();
        $jadwal = JadwalTayang::all();
        return view('movie.now', compact('movie'));
    }

    public function showUpComing()
    {
        $nowplay = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/upcoming')->json()['results'];

        $movie = [];
        $groupSize = 6;
        $totalMovies = count($nowplay);
        $groupCount = ceil($totalMovies / $groupSize);

        for ($i = 0; $i < $groupCount; $i++) {
            $start = $i * $groupSize;
            $end = ($i + 1) * $groupSize;
            $movie[$i] = array_slice($nowplay, $start, $groupSize);
        }

        return view('movie.soon', compact('movie'));
    }

    public function detailed(Request $request)
    {
        $getJadwal = JadwalTayang::where('tanggal_tayang', $request->tanggal)->first();

        return view('movie.buyticket', [
            'judul' => $getJadwal->film->judul_film,
            'poster' => $getJadwal->film->poster,
            'tanggal' => $request->tanggal,
            'jam' => $getJadwal->waktu_tayang,
            'kuota' => $getJadwal->kuota,
            'harga' => $getJadwal->harga_tiket,
            'jadwalID' => $getJadwal->id
        ]);
    }

    public function showDetail($id)
    {

        $getFilm = Film::where('id', $id)->get();
        $getJadwal = JadwalTayang::where('film_id', $id)->get();

        $tanggalTayangArray = $getFilm->pluck('tanggal_tayang')->unique()->toArray();

        $response = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/search/movie', [
                'query' => $getFilm[0]->judul_film
            ])->json();

        $movieId = null;
        if (isset($response['results']) && count($response['results']) > 0) {
            $movieId = $response['results'][0]['id'];
        }

        $response = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $movieId);
        $movie = $response->json();

        $creditsResponse = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $movieId . '/credits');
        $credits = $creditsResponse->json();

        $producers = [];
        foreach ($credits['crew'] as $crewMember) {
            if ($crewMember['job'] == 'Producer') {
                $producers[] = $crewMember['name'];
            }
        }

        $actors = [];
        foreach ($credits['cast'] as $castMember) {
            $actors[] = [
                'name' => $castMember['name'],
                'profile_path' => $castMember['profile_path'],
            ];
        }

        $duration = $movie['runtime'];

        $videosResponse = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $movieId . '/videos');
        $videos = $videosResponse->json();

        $trailer = null;
        foreach ($videos['results'] as $video) {
            if ($video['type'] === 'Trailer' && $video['site'] === 'YouTube') {
                $trailer = $video['key'];
                break;
            }
        }

        return view('movie.detail', [
            'id' => $id,
            'poster_path' => $movie['poster_path'],
            'title' => $movie['title'],
            'overview' => $movie['overview'],
            'genres' => $movie['genres'],
            'producers' => $producers,
            'actors' => $actors,
            'duration' => $duration,
            'languanges' => $movie['spoken_languages'],
            'release_date' => $movie['release_date'],
            'trailer' => $trailer,
            'rating' => number_format($movie['vote_average'], 1),
            'tanggal' => $tanggalTayangArray,
            'getJadwal' => $getJadwal,
        ]);
    }

    public function showDetailSoon($id)
    {
        $response = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id);
        $movie = $response->json();

        $creditsResponse = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '/credits');
        $credits = $creditsResponse->json();

        $producers = [];
        foreach ($credits['crew'] as $crewMember) {
            if ($crewMember['job'] == 'Producer') {
                $producers[] = $crewMember['name'];
            }
        }

        $actors = [];
        foreach ($credits['cast'] as $castMember) {
            $actors[] = [
                'name' => $castMember['name'],
                'profile_path' => $castMember['profile_path'],
            ];
        }

        $duration = $movie['runtime'];

        $videosResponse = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '/videos');
        $videos = $videosResponse->json();

        $trailer = null;
        foreach ($videos['results'] as $video) {
            if ($video['type'] === 'Trailer' && $video['site'] === 'YouTube') {
                $trailer = $video['key'];
                break;
            }
        }

        return view('movie.detailsoon', [
            'poster_path' => $movie['poster_path'],
            'title' => $movie['title'],
            'overview' => $movie['overview'],
            'genres' => $movie['genres'],
            'producers' => $producers,
            'actors' => $actors,
            'duration' => $duration,
            'languanges' => $movie['spoken_languages'],
            'release_date' => $movie['release_date'],
            'trailer' => $trailer,
            'rating' => number_format($movie['vote_average'], 1),
        ]);
    }

    public function showTicket()
    {
        $data = Pemesanan::with('jadwalTayang.film')->where('pelanggan_id', auth()->user()->id)->get();
        // Gunakan 'with' untuk memuat relasi 'jadwalTayang' dan 'film'
        // Kemudian gunakan chaining untuk mengakses atribut 'poster'

        // dd($data->all(), $data[0]->jadwalTayang->harga_tiket);
        return view('movie.myticket', ['theTicket' => $data]);
    }


    public function showProfile()
    {
        return view('user.myprofile');
    }
}