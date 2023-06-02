@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
            </div>
            <div class="card-body">

                <h4 class="text-center">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h4>
                <h3 class="text-center">KARTU HASIL STUDI (KHS)</h3>

                <p><span class="font-weight-bold">Nama:</span> {{ $mahasiswa->nama }}</p>
                <p><span class="font-weight-bold">NIM:</span> {{ $mahasiswa->nim }}</p>
                <p><span class="font-weight-bold">Kelas:</span> {{ $mahasiswa->kelas->nama_kelas }}</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>MataKuliah</th>
                            <th>SKS</th>
                            <th>Jam</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($khs->count() > 0)
                            @foreach ($khs as $i => $m)
                                <tr>
                                    <td>{{ $m->matakuliah->nama_matkul }}</td>
                                    <td>{{ $m->matakuliah->sks }}</td>
                                    <td>{{ $m->matakuliah->jam }}</td>
                                    <td>{{ $m->nilai }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="text-center">Data tidak ada</td>
                            </tr>
                        @endif

                    </tbody>
                </table>

                <div class="card-footer">
                    <form action="{{ url('/mahasiswa/export_mahasiswa_pdf/' . $mahasiswa->id) }}" method="GET">
                        <button type="submit" class="btn-primary p-3">Export PDF</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
