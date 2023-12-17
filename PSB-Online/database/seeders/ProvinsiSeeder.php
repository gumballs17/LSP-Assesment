<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Kepulauan Riau',
            'Jambi', 'Bengkulu', 'Sumatera Selatan', 'Bangka Belitung', 'Lampung',
            'Banten', 'Jawa Barat', 'DKI Jakarta', 'Jawa Tengah', 'Yogyakarta',
            'Jawa Timur', 'Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur',
            'Kalimantan Barat', 'Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara',
            'Gorontalo', 'Sulawesi Selatan', 'Sulawesi Tenggara', 'Sulawesi Barat', 'Sulawesi Tengah',
            'Sulawesi Utara', 'Maluku', 'Maluku Utara', 'Papua', 'Papua Barat',
        ];

        foreach ($data as $provinsi) {
            Provinsi::create(['name' => $provinsi]);
        }
    }
}
