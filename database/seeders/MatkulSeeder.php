<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert( [
            [
                'kode_mk' => 'RTI214008',
                'mata_kuliah' => 'Pemrograman Web Lanjut',
                'dosen' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom.',
                'sks' => '3',
                'jam' => '6'
            ], [
                'kode_mk' => 'RTI214009',
                'mata_kuliah' => 'Komputasi Statistika',
                'dosen' => 'Elok Nur Hamdana, S.T, M.T.',
                'sks' => '2',
                'jam' => '4'
            ], [
                'kode_mk' => 'RTI214004',
                'mata_kuliah' => 'Proyek 1',
                'dosen' => 'Farid Angga Pribadi, S.Kom., M.Kom.',
                'sks' => '3',
                'jam' => '6'
            ], [
                'kode_mk' => 'RTI214005',
                'mata_kuliah' => 'Bisiness Intelligence',
                'dosen' => 'Endah Septa Sintiya, S.Pd., M.Kom.',
                'sks' => '2',
                'jam' => '4'
            ], [
                'kode_mk' => 'RTI214006',
                'mata_kuliah' => 'Jaringan Komputer',
                'dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
                'sks' => '2',
                'jam' => '4'
            ], [
                'kode_mk' => 'RTI214003',
                'mata_kuliah' => 'Manajemen Proyek',
                'dosen' => 'Candra Bella Vista, S.Kom., M.T.',
                'sks' => '2',
                'jam' => '3'
            ], [
                'kode_mk' => 'RTI214001	',
                'mata_kuliah' => 'Kewarganegaraan',
                'dosen' => 'Widaningsih, S.H., M.H.	',
                'sks' => '2',
                'jam' => '2'
            ], [
                'kode_mk' => 'RTI214002',
                'mata_kuliah' => 'Analisis dan Desain Berorientasi Objek',
                'dosen' => 'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom.',
                'sks' => '2',
                'jam' => '4'
            ], [
                'kode_mk' => 'RTI214007',
                'mata_kuliah' => 'Praktikum Jaringan Komputer',
                'dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.	',
                'sks' => '2',
                'jam' => '4'
            ]
        ] );
    }
}
