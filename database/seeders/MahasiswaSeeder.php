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
        DB::table('mahasiswa')->insert([
            [
                'kelas_id' => 2,
                'nim' => '2141720058',
                'nama' => 'Patria Anggara Susilo Putra',
                'jenis_kelamin' => 'L',
                'tempat_lahir' => 'Kab. Madiun',
                'tgl_lahir' => '2003/05/06',
                'alamat' => 'Jalan Wahyu Hidayat II',
                'no_telp' => '0895399091596'
            ]
        ]);
    }
}
