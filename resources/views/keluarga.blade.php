@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pegawai</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>Jenis Kelamin</th>
                            <th>relasi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($keluarga as $data_keluarga)
                            <tr>
                                <td>{{ $data_keluarga->id }}</td>
                                <td>{{ $data_keluarga->nama }}</td>
                                <td>{{ $data_keluarga->jenis_kelamin }}</td>
                                <td>{{ $data_keluarga->relasi }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
