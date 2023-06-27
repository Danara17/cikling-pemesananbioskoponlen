<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'film';
    protected $fillable = ['judul_film', 'genre', 'durasi', 'sinopsis'];
    protected $guarded = [
        // attributes that should not be mass assignable
    ];

    public function jadwalTayang()
    {
        return $this->hasMany(JadwalTayang::class);
    }
}