<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // mengisi beberapa data keluarga
        DB::table('keluarga')->insert( [
            [
                'nama' => 'Agustina Liling',
                'jenis_kelamin' => 'Perempuan',
                'relasi' => 'Ibu'
            ], [
                'nama' => 'Pancar Agung Susilo',
                'jenis_kelamin' => 'Laki-laki',
                'relasi' => 'Ayah'
            ], [
                'nama' => 'Triwulan',
                'jenis_kelamin' => 'Perempuan',
                'relasi' => 'Tante'
            ], [
                'nama' => 'Maulana Dedy Setyawan',
                'jenis_kelamin' => 'Laki-laki',
                'relasi' => 'Kakak / Mas'
            ], [
                'nama' => 'Tafftia Anggraeni Susilo Putri',
                'jenis_kelamin' => 'Perempuan',
                'relasi' => 'Kakak / Mbak / Kembaran'
            ], [
                'nama' => 'Patria Anggara Susilo Putra',
                'jenis_kelamin' => 'Laki-laki',
                'relasi' => 'Adik'
            ]
        ] );
    }
}
