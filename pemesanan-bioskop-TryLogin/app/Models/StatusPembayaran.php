<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPembayaran extends Model
{
    use HasFactory;
    protected $table = 'status_pembayaran';

    protected $fillable = ['nama_status_pembayaran', 'deskripsi'];

    // Definisikan relasi dengan tabel Pemesanan
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}