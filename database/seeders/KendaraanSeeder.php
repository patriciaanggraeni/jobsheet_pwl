<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'kendaraan') -> insert ( [
            [
                'nopol' => 'N 199 ER',
                'merk' => 'Honda',
                'jenis' => 'Vario',
                'tahun_buat' => '2077',
                'warna' => 'hitam'
            ],
            [
                'nopol' => 'AE 4536 A',
                'merk' => 'Yamaha',
                'jenis' => 'R15',
                'tahun_buat' => '2023',
                'warna' => 'biru'
            ],
            [
                'nopol' => 'AG 7865 RE',
                'merk' => 'Honda',
                'jenis' => 'Blade',
                'tahun_buat' => '2016',
                'warna' => 'hitam'
            ]
        ] );
    }
}
