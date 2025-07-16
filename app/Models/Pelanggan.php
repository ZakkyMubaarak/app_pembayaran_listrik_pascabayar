<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = [
        'nomor_kwh',
        'nama',
        'no_telp',
        'alamat',
        'tarif_id'
    ];

    public function tarif()

    {
        return $this->belongsTo(Tarif::class, 'tarif_id');
    }

    public function penggunaan()
    {
        return $this->hasMany(Penggunaan::class, 'pelanggan_id');
    }

    public function tagihan()
    {
        return $this->hasMany(Tagihan::class, 'pelanggan_id');
    }
}
