<?php

namespace App\Filament\Resources\PenggunaanResource\Pages;

use Filament\Actions;
use App\Models\Penggunaan;
use Illuminate\Support\Str;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\PenggunaanResource;
use App\Models\Tagihan;

class CreatePenggunaan extends CreateRecord
{
    protected static string $resource = PenggunaanResource::class;

    protected function afterCreate()
    {

        $kode_tagihan = 'TAG' . now()->format('dmy') . strtoupper(Str::random(4));
        $penggunaan = Penggunaan::find($this->record->id);

        $kode_tagihan = 'TAG' . now()->format('dmy') . '-' . strtoupper(Str::random(4));
        $jumlah_meter = $penggunaan->meter_akhir - $penggunaan->meter_awal;
        Tagihan::create([
            'kode_tagihan' => $kode_tagihan,
            'penggunaan_id' => $penggunaan->id,
            'pelanggan_id' => $penggunaan->pelanggan_id,
            'total_tagihan' => $jumlah_meter * $penggunaan->tarif_per_kwh,
            'bulan' => $penggunaan->bulan,
            'tahun' => $penggunaan->tahun,
            'jumlah_meter' => $jumlah_meter,
            'status' => 'belum dibayar',
            'biaya_admin' => 3000
        ]);
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
