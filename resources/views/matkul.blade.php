@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Kendaraan</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode MK</th>
                            <th>Mata Kuliah</th>
                            <th>Dosen</th>
                            <th>SKS</th>
                            <th>Jam</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($matkul as $index => $data_matkul)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data_matkul->kode_mk }}</td>
                                <td>{{ $data_matkul->mata_kuliah }}</td>
                                <td>{{ $data_matkul->dosen }}</td>
                                <td>{{ $data_matkul->sks }}</td>
                                <td>{{ $data_matkul->jam }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
