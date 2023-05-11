<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $mahasiswa = [
            [
                'nama' => 'Patria Anggara Susilo Putra',
                'kelas_id' => 2,
                'nim' => '2141720058',
                'jenis_kelamin' => 'L',
                'tempat_lahir' => 'Kab. Madiun',
                'tgl_lahir' => '2003/05/06',
                'alamat' => 'Jalan Wahyu Hidayat II',
                'no_telp' => '0895399091596'
            ], [
                'nama' => 'Bagus Saputra',
                'kelas_id' => 4,
                'nim' => '2141720059',
                'jenis_kelamin' => 'L',
                'tempat_lahir' => 'Kab. Ponorogo',
                'tgl_lahir' => '2002/10/12',
                'alamat' => 'Jalan Surakarta No.10',
                'no_telp' => '089567321231'
            ], [
                'nama' => 'Dina Putri Ananda',
                'kelas_id' => 1,
                'nim' => '2141720060',
                'jenis_kelamin' => 'P',
                'tempat_lahir' => 'Kota Malang',
                'tgl_lahir' => '2003/04/23',
                'alamat' => 'Jalan Sriti No.15',
                'no_telp' => '08189433289'
            ]
        ];

        DB::table('mahasiswa')->insert($mahasiswa);
    }
}
