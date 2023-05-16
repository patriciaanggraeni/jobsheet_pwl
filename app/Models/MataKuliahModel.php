<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $fillable = [
        'nama_matkul',
        'sks',
        'jam',
        'semester'
    ];

    public function mahasiswa_matakuliah() {
        return $this->hasMany(MahasiswaMataKuliahModel::class, 'id_matakuliah');
    }
}
