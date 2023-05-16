<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('mahasiswa_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_matakuliah');
            $table->enum('nilai', ['A', 'B', 'C', 'D', 'E', 'F']);

            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_matakuliah')->references('id')->on('matakuliah')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_matakuliah');
    }
}
