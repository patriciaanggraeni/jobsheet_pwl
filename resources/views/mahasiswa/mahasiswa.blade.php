@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                @if ($pesan = Session::get('success'))
                    <div class="alert alert-success mt-3" role="alert">
                        <b> {{ $pesan }} </b>
                    </div>
                @endif
                <button class="btn btn-sm btn-success my-2" data-toggle="modal" data-target="#modal_mahasiswa">Tambah+</button>

                <table class="table table-bordered table-striped" id="data-mahasiswa">
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
                        <?php ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswa/create') }}" role="form" class="form-horizontal" id="form_mahasiswa" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Mahasiswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-message"></div>
                        <div class="form-group required row mb-2">
                            <label for="nim" class="col-sm-2 control-label col-form-label text-capitalize">
                                nim
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nim" name="nim"/>
                            </div>
                            @error('nim')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group required row mb-2">
                            <label for="nama" class="col-sm-2 control-label col-form-label text-capitalize">nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama"/>
                            </div>
                            @error('nama')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group required row mb-2">
                            <label for="kelas_id" class="col-sm-2 control-label col-form-label text-capitalize">kelas</label>
                            <select id="kelas_id" name="kelas_id" class="ml-2 col-sm-5 form-control @error('kelas_id') is-invalid @enderror">
                                @foreach($kelas as $kls)
                                    <option value="{{ $kls->id }}">
                                        {{ $kls->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group required row mb-2">
                            <label for="gambar" class="col-sm-2 control-label col-form-label text-capitalize">gambar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="gambar" name="gambar"/>
                            </div>
                            @error('gambar')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group required row mb-2">
                            <label for="jenis_kelamin" class="col-sm-2 control-label col-form-label text-capitalize">jenis kelamin</label>
                            <select id="jenis-kelamin" name="jenis_kelamin"
                                class="ml-2 col-sm-5 form-control @error('jenis_kelamin') is-invalid @enderror">
                                <option selected>--Pilih Jenis Kelamin--</option>
                                <option value="L">Laki - laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group required row mb-2">
                            <label for="tempat_lahir" class="col-sm-2 control-label col-form-label text-capitalize">tampat lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="tempat_lahir" name="tempat_lahir"/>
                            </div>
                            @error('tempat_lahir')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group required row mb-2">
                            <label for="tgl_lahir" class="col-sm-2 control-label col-form-label text-capitalize">tgl lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="tgl_lahir" name="tgl_lahir"/>
                            </div>
                            @error('tgl_lahir')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group required row mb-2">
                            <label for="tgl_lahir" class="col-sm-2 control-label col-form-label text-capitalize">alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="alamat" name="alamat"/>
                            </div>
                            @error('alamat')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group required row mb-2">
                            <label for="no_telp" class="col-sm-2 control-label col-form-label text-capitalize">no telph</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="no_telp" name="no_telp"/>
                            </div>
                            @error('no_telp')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default text-capitalize" data-dismiss="modal">keluar</button>
                        <button type="submit" onclick="closeModal()" class="btn btn-primary text-capitalize">simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>

        function closeModal() {
            $('#modal_mahasiswa').modal('hide'); // Menutup modal dengan ID 'modal_mahasiswa'
         }

        $('#form_mahasiswa').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ url('mahasiswa') }}",
                method: "POST",
                data: $(this).serialize(),
                dataType: 'json',
                success: function(data) {
                    $('.form-message').html('');
                    //$('#modal_mahasiswa').modal('hide');
                    if (data.status) {
                        $('.form-message').html(
                            '<span class="alert alert-success" style="width: 100%">' + data
                            .message + '</span>');
                        $('#form_mahasiswa')[0].reset();
                        dataMahasiswa.ajax.reload();
                    } else {
                        $('.form-message').html(
                            '<span class="alert alert-danger" style="width: 100%">' + data.message +
                            '</span>');
                        alert('error');
                    }
                }
            });
        });
    </script>

    @push('scripts')
        <script>
            // ketika halaman web selesai diload, maka script ini akan dijalankan
            $(document).ready(function() {
                var dataMahasiswa = $('#data-mahasiswa').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ url('mahasiswa/data') }}",
                        dataType: 'json',
                        type: 'POST'
                    },
                    columns: [{
                            data: 'nomor',
                            name: 'nomor',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'nim',
                            name: 'nim',
                            searchable: true
                        },
                        {
                            data: 'nama',
                            name: 'nama',
                            searchable: true,
                            orderable: true
                        },
                        {
                            data: 'nama_kelas',
                            name: 'nama_kelas',
                            searchable: true,
                            orderable: true
                        },
                        {
                            data: 'jenis_kelamin',
                            name: 'jenis_kelamin',
                            render: function(data, type, row) {
                                if (data === 'L') {
                                    return 'Laki-laki'
                                } else {
                                    return 'Perempuan'
                                }
                            }
                        },
                        {
                            data: 'id',
                            name: 'id',
                            sortable: false,
                            searchable: false,
                            render: function(data, type, row) {
                                var btn = '<a href="{{ url('/mahasiswa/') }}/' + data +
                                    '/edit" class="btn btn-xs btn-warning d-inline mr-2"><i class="fa fa-edit"></i> Edit</a>' +
                                    '<a href="{{ url('/mahasiswa/') }}/' + data +
                                    '" class="btn btn-xs btn-info d-inline mr-2"><i class="fa fa-list"></i> Detail</a>' +
                                    '<form method="POST" action="{{ url('/mahasiswa/') }}/' + data +
                                    '" class="d-inline">' +
                                    '@csrf @method('DELETE')' +
                                    '<button type="submit" class="btn btn-xs btn-danger" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')">' +
                                    '<i class="fa fa-trash"></i>Hapus' +
                                    '</button>' +
                                    '</form>';
                                return btn;
                            }
                        }
                    ]
                });
            });
        </script>
    @endpush
@endsection
