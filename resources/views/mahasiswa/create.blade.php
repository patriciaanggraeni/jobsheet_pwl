@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/mahasiswa/create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="input-nim">Nim</label>
                        <input id="input-nim" class="form-control @error('nim') is-invalid @enderror" name="nim" type="text"">
                        @error('nim')
                            <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-name">Nama</label>
                        <input id="input-name" class="form-control" name="nama" type="text">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="gambar">Gambar</label>
                            <input id="gambar" class="form-control" name="gambar" type="file">
                        </div>
                        @error('gambar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-kelas">Kelas</label>
                        <select class="form-control" name="kelas_id" id="input-kelas">
                            @foreach ($kelas as $kls)
                                <option value="{{ $kls->id }}">
                                    {{ $kls->nama_kelas }}
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
                            <option>--Pilih Jenis Kelamin--</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-tempat-lahir">Tempat Lahir</label>
                        <input id="input-tempat-lahir" class="form-control" name="tempat_lahir" type="text">
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-tanggal-lahir">Tanggal Lahir</label>
                        <input id="input-tanggal-lahir" class="form-control" name="tgl_lahir" type="text">
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input id="input-alamat" class="form-control" name="alamat" type="text">
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-no-telp">No. Telphone</label>
                        <input id="input-no-telp" class="form-control" name="no_telp" type="text">
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
