<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert( [
            [
                'nama' => 'menonton anime',
                'alasan' => 'karena ingin menjadi karakter utama dalam anime'
            ], [
                'nama' => 'ngoding',
                'alasan' => 'pengen jadi heker'
            ], [
                'nama' => 'menggambar',
                'alasan' => 'karena sudah dari dulu senang gambar'
            ]
        ] );
    }
}
