<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // panggil class KendaraanSeeder
        $this->call( [KendaraanSeeder::class] );

        // panggil class HobiSeeder
        $this->call( [HobiSeeder::class] );

        // panggil class KeluargaSeeder
        $this->call( [KeluargaSeeder::class] );

        // panggil class KeluargaSeeder
        // $this->call( [MahasiswaSeeder::class] );
        $this->call( [MatkulSeeder::class] );
        $this->call( [UserSeeder::class] );
        $this->call( [MataKuliahSeeder::class] );
        $this->call( [KelasSeeder::class] );
        $this->call( [UpdateMahasiswaSeeder::class] );
    }
}
