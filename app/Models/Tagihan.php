<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';
    protected $fillable =
    [
        'kode_tagihan',
        'penggunaan_id',
        'pelanggan_id',
        'total_tagihan',
        'status',
        'bulan',
        'tahun',
        'jumlah_meter',
        'biaya_admin'
    ];

    public function penggunaan()
    {
        return $this->belongsTo(Penggunaan::class, 'penggunaan_id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
}
