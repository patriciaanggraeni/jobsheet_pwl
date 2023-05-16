<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $mahasiswa_matakuliah = [
            [
                'id_mahasiswa' => 1,
                'id_matakuliah' => 1,
                'nilai' => 'A'
            ], [
                'id_mahasiswa' => 1,
                'id_matakuliah' => 2,
                'nilai' => 'B'
            ], [
                'id_mahasiswa' => 1,
                'id_matakuliah' => 3,
                'nilai' => 'C'
            ], [
                'id_mahasiswa' => 1,
                'id_matakuliah' => 4,
                'nilai' => 'B'
            ]
        ];

        DB::table('mahasiswa_matakuliah')->insert($mahasiswa_matakuliah);
    }
}
