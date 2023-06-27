<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Pelanggan extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $table = 'pelanggan';
    public $timestamps = false;
    protected $fillable = ['username', 'password', 'email', 'notelp', 'gender', 'role'];
    // Implementasikan metode yang diperlukan
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}