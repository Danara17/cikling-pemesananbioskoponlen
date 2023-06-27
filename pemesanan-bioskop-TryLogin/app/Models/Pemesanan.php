<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';

    protected $fillable = ['jadwal_tayang_id', 'pelanggan_id', 'nama_pemesan', 'jumlah_tiket', 'total_harga', 'status_pembayaran_id'];

    // Definisikan relasi dengan tabel JadwalTayang
    public function jadwalTayang()
    {
        return $this->belongsTo(JadwalTayang::class);
    }

    // Definisikan relasi dengan tabel Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    // Definisikan relasi dengan tabel StatusPembayaran
    // public function statusPembayaran()
    // {
    //     return $this->belongsTo(StatusPembayaran::class);
    // }
}