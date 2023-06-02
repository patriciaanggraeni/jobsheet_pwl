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
                            <th>nopol</th>
                            <th>merk</th>
                            <th>jenis</th>
                            <th>tahun buat</th>
                            <th>warna</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($kendaraan as $data)
                            <tr>
                                <td>{{ $data->nopol }}</td>
                                <td>{{ $data->merk }}</td>
                                <td>{{ $data->jenis }}</td>
                                <td>{{ $data->tahun_buat }}</td>
                                <td>{{ $data->warna }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
