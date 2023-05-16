<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
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

            {{-- buat kondisi jika pesan menerima sebuah seesion --}}
            @if ( $pesan = Session::get('success') )

                {{-- taruh alert di sini --}}
                <div class="alert alert-success mt-3" role="alert">
                    {{-- tampilkan pesannya --}}
                    <b> {{ $pesan }} </b>
                </div>

                @endif

            <a href="{{ url('mahasiswa/create') }}" class="btn btn-sm btn-success my-2">Tambah +</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @if ($paginate->count() > 0)
                    @foreach($paginate as $i => $m)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>
                                <img src="{{ url('storage/' . $m->gambar) }}" alt="gambar mahasiswa" style="width: 100px; height: 100px;">
                            </td>
                            <td>{{ $m->kelas->nama_kelas }}</td>
                            <td>{{ ($m->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' ) }}</td>
                            <td class="">
                                <a href="{{ url('/mahasiswa/' . $m->id . '/detail_khs') }}" class="btn btn-sm btn-info">
                                    Nilai
                                </a>
                                <a href="{{ url('/mahasiswa/' . $m->id) }}" class="btn btn-sm btn-primary">
                                    Detail
                                </a>
                                <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>
                                <form class="d-inline" method="POST" action="{{ url('/mahasiswa/' . $m->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="{{ url('/mahasiswa/' . $m->id) }}" class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">Data tidak ada</td>
                    </tr>
                @endif

                </tbody>

            </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer"></div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
