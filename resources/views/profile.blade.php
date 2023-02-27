@extends('layouts.template')


@section('profile')

    <div class="biodata">
        <b><p>Nama : {{ $nama }}</p></b>
        <b><p>Nim   : {{ $nim }}</p></b>
        <b><p>Kelas: {{ $kelas }}</p></b>
    </div>

@endsection
