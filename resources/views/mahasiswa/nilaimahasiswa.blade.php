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

        <h4 class="text-center">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h4>
        <h3 class="text-center">KARTU HASIL STUDI (KHS)</h3>

        <p><span class="font-weight-bold">Nama:</span> {{$mahasiswa->nama}}</p>
        <p><span class="font-weight-bold">NIM:</span> {{$mahasiswa->nim}}</p>
        <p><span class="font-weight-bold">Kelas:</span> {{$mahasiswa->kelas->nama_kelas}}</p>

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
                @if($khs->count() > 0)
                    @foreach($khs as $i => $m)
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
    </section>
</div>
