<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'gambar',
        'kelas_id',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'no_telp'
    ];

    public function kelas() {
        return $this->belongsTo(KelasModel::class);
    }

    public function mahasiswa_matakuliah() {
        return $this->hasMany(MahasiswaMataKuliahModel::class, 'id');
    }
}
