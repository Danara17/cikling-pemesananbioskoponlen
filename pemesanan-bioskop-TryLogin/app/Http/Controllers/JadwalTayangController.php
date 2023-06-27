<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\JadwalTayang;
use Illuminate\Http\Request;
use App\Jobs\HapusFilmJob;
use Illuminate\Support\Facades\Bus;

class JadwalTayangController extends Controller
{
    public function addJadwal(Request $request)
    {
        $dateTime = $request->tanggal_tayang;
        $date = substr($dateTime, 0, 10); // Mengambil tanggal (YYYY-MM-DD) dari string datetime

        $rules = [
            'tanggal_tayang' => 'required|unique:jadwal_tayang,tanggal_tayang',
            // Aturan validasi lainnya...
        ];

        $messages = [
            'tanggal_tayang.required' => 'Tanggal tayang harus diisi',
            'tanggal_tayang.unique' => 'Tanggal tayang sudah ada terdaftar',
            // Pesan error lainnya...
        ];

        $validatedData = $request->validate($rules, $messages);

        // Memeriksa apakah tanggal tayang sudah ada di database
        $existingJadwal = JadwalTayang::where('tanggal_tayang', $date)->first();

        if ($existingJadwal) {
            return redirect('/tayang-admin')->with('error', 'Tanggal tayang sudah ada di database.');
        }

        // Menyimpan jadwal tayang baru
        $newJadwal = new JadwalTayang();
        $newJadwal->film_id = $request->id;
        $newJadwal->tanggal_tayang = $date;
        $newJadwal->waktu_tayang = substr($dateTime, 11, 5); // Mengambil waktu (HH:MM) dari string datetime
        $newJadwal->harga_tiket = $request->harga_tiket;
        $newJadwal->kuota = 8;
        $newJadwal->save();


        return redirect('/tayang-admin')->with('success', 'Film berhasil dijadwalkan.');
    }

}