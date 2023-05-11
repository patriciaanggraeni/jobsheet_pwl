<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        @yield('card-body')
        @yield('profile')
        @yield('mahasiswa')

        <div class="mahasiswa"></div>
        <div class="profile"></div>
        <div class="card-body">

            <form action="{{ url('/mahasiswa') }}" method="POST">

                @csrf
                <div class="form-group">
                    <label for="input-nim">Nim</label>
                    <input id="input-nim" class="form-control @error('nim') is-invalid @enderror" name="nim" type="text">
                    @error('nim')
                        <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="input-name">Nama</label>
                    <input id="input-name" class="form-control @error('nama') is-invalid @enderror" name="nama" type="text">
                    @error('nama')
                        <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                </div>

                <div>
                    <label for="kelas_id">Kelas</label>
                    <select id="kelas_id" name="kelas_id" class="form-control @error('kelas') is-invalid @enderror">
                        @foreach($kelas as $kls)
                            <option value="{{ $kls->id }}">
                                {{ $kls->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                    @error('kelas')
                        <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="input-jenis-kelamin">Jenis Kelamin</label>
                    <select id="input-jenis-kelamin" name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                        <option selected>--Pilih Jenis Kelamin--</option>
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="input-tempat-lahir">Tempat Lahir</label>
                    <input id="input-tempat-lahir" class="form-control" name="tempat_lahir" type="text">
                    @error('tempat_lahir')
                        <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="input-tanggal-lahir">Tanggal Lahir</label>
                    <input id="input-tanggal-lahir" class="form-control" name="tgl_lahir" type="text">
                    @error('tgl_lahir')
                        <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="input-alamat" class="form-control" name="alamat" type="text">
                    @error('alamat')
                        <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="input-no-telp">No. Telphone</label>
                    <input id="input-no-telp" class="form-control" name="no_telp" type="text">
                    @error('no_telp')
                        <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </form>

        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
