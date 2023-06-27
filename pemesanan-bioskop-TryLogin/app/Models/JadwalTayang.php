<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalTayang extends Model
{
    use HasFactory;
    protected $table = 'jadwal_tayang';

    protected $fillable = ['film_id', 'tanggal_tayang', 'waktu_tayang', 'harga_tiket'];

    // Definisikan relasi dengan tabel Film
    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    // Definisikan relasi dengan tabel Pemesanan
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }

    public static function rules()
    {
        return [
            'tanggal_tayang' => 'required|date|unique:jadwal_tayang',
            // Aturan validasi lainnya...
        ];
    }

}