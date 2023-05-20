<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaMataKuliahModel extends Model {

    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';
    protected $fillable = [
        'id_mahasiswa',
        'id_matakuliah',
        'nilai'
    ];

    public function mahasiswa() {
        return $this->belongsTo(MahasiswaModel::class, 'id_mahasiswa');
    }

    public function matakuliah() {
        return $this->belongsTo(MataKuliahModel::class, 'id_matakuliah');
    }
}
