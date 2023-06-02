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
                        <th>alasan</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($hobi as $data_hobi)
                        <tr>
                            <td>{{ $data_hobi->id }}</td>
                            <td>{{ $data_hobi->nama }}</td>
                            <td>{{ $data_hobi->alasan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
