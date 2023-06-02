@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Kelas</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>No. Handphone</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>
                                <img src="{{ url('storage/' . $mahasiswa->gambar) }}" alt="gambar mahasiswa" style="width: 100px; height: 100px; border-radius: 50%;">
                            </td>
                            <td>{{ $mahasiswa->kelas->nama_kelas }}</td>
                            <td>
                                {{ $mahasiswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                            </td>
                            <td>{{ $mahasiswa->tempat_lahir }}</td>
                            <td>{{ $mahasiswa->tgl_lahir }}</td>
                            <td>{{ $mahasiswa->no_telp }}</td>
                            <td>{{ $mahasiswa->alamat }}</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
