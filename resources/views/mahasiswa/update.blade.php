@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/mahasiswa/' . $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {!! isset($mahasiswa) ? method_field('PUT') : '' !!}
                    <div class="form-group">
                        <label for="input-nim">Nim</label>
                        <input id="input-nim" class="form-control @error('nim') is-invalid @enderror" name="nim"
                            type="text" value="{{ isset($mahasiswa) ? $mahasiswa->nim : old('nim') }}">
                        @error('nim')
                            <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-name">Nama</label>
                        <input id="input-name" class="form-control" name="nama" type="text"
                            value="{{ $mahasiswa->nama }}">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img width="150px" class="mb-2" src="{{ asset('storage/' . $mahasiswa->gambar) }}">
                        <div>
                            <label for="gambar">Gambar</label>
                            <input id="gambar" class="form-control" name="gambar" type="file"
                                value="{{ $mahasiswa->gambar }}">
                        </div>
                        @error('gambar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-kelas">Kelas</label>
                        <select class="form-control" name="kelas_id" id="input-kelas">
                            @foreach ($kelas as $kls)
                                <option value="{{ $kls->id }}"
                                    {{ $mahasiswa->kelas_id == $kls->id ? 'selected' : '' }}>{{ $kls->nama_kelas }}
                                </option>
                            @endforeach
                        </select>
                        @error('kelas_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-jenis-kelamin">Jenis Kelamin</label>
                        <select id="input-jenis-kelamin" name="jenis_kelamin" class="form-control">
                            <option selected>{{ $mahasiswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-tempat-lahir">Tempat Lahir</label>
                        <input id="input-tempat-lahir" class="form-control" name="tempat_lahir" type="text"
                            value="{{ $mahasiswa->tempat_lahir }}">
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-tanggal-lahir">Tanggal Lahir</label>
                        <input id="input-tanggal-lahir" class="form-control" name="tgl_lahir" type="text"
                            value="{{ $mahasiswa->tgl_lahir }}">
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input id="input-alamat" class="form-control" name="alamat" type="text"
                            value="{{ $mahasiswa->alamat }}">
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-no-telp">No. Telphone</label>
                        <input id="input-no-telp" class="form-control" name="no_telp" type="text"
                            value="{{ $mahasiswa->no_telp }}">
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
