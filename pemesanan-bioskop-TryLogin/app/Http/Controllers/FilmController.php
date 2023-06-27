<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Film;
use App\Models\JadwalTayang;

class FilmController extends Controller
{
    public function buyticket($id)
    {
        $getFilm = Film::where('id_film', $id)->get();

        return view('movie.buyticket', [
            'film' => $getFilm,
        ]);
    }

    public function showTayang(Request $request)
    {
        if ($request->has('search')) {
            $getFilm = Film::where('judul_film', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $getFilm = Film::paginate(3);
        }

        return view('admin.tayang', compact('getFilm'));
    }

    public function showEditTayang($id)
    {
        // Database Lokal
        $data = Film::where('id', $id)->get();
        return view('admin.edit', ['data' => $data]);

    }

    public function showAddTayang()
    {
        $nowplay = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];

        return view('admin.add', compact('nowplay'));
    }


    public function addTayang(Request $request)
    {
        $filmbaru = new Film();

        $judul = $request->poster->getClientOriginalName();
        $filmbaru->judul_film = $request->judul_film;
        $filmbaru->poster = $judul;
        $filmbaru->genre = $request->genre;
        $filmbaru->sinopsis = $request->sinopsis;
        $filmbaru->durasi = $request->durasi;
        $filmbaru->link_ytb = $request->link_ytb;

        $filmbaru->save();

        // Pindahkan file ke folder img
        $request->poster->move('film', $judul);

        return redirect('/tayang-admin')->with('success', 'Film berhasil ditambahkan');
    }


    public function editTayang(Request $request)
    {

        if ($request->hasFile('poster')) {
            // Tambah poster baru
            $judul = $request->poster->getClientOriginalName();
            $request->poster->move('film', $judul);
            // DD($request->poster);
            // Proses Hapus File lama
            $posterlama = Film::where('id', $request->id)->get('poster');
            $namaposter = $posterlama[0]->poster;
            $path = 'film/' . $namaposter;
            if (file_exists(public_path($path))) {
                unlink(public_path($path));
            } else {
                Film::where('id', $request->id)->update([
                    'judul_film' => $request->judul_film,
                    'poster' => $judul,
                    'genre' => $request->genre,
                    'sinopsis' => $request->sinopsis,
                    'durasi' => $request->durasi,
                    'link_ytb' => $request->link_ytb,
                ]);

                return redirect('/tayang-admin')->with('success', 'Film Berhasil Diupdate');
            }

        } else {

            Film::where('id', $request->id)->update([
                'judul_film' => $request->judul_film,
                'genre' => $request->genre,
                'sinopsis' => $request->sinopsis,
                'durasi' => $request->durasi,
                'link_ytb' => $request->link_ytb,
            ]);

            return redirect('/tayang-admin')->with('success', 'Film Berhasil Diupdate');
        }
    }

    public function deleteTayang($id)
    {
        Film::find($id)->delete();
        return redirect('/tayang-admin')->with('success', 'Film Berhasil Dihapus');
    }
}