<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
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
        @yield('pengalaman-kuliah')

        <div class="pengalaman-kuliah"></div>
        <div class="profile"></div>
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

                    {{-- @foreach ( $kendaraan as $data )

                        <tr>
                            <td>{{ $data->nopol }}</td>
                            <td>{{ $data->merk }}</td>
                            <td>{{ $data->jenis }}</td>
                            <td>{{ $data->tahun_buat }}</td>
                            <td>{{ $data->warna }}</td>
                        </tr>

                    @endforeach --}}

                </tbody>

            </table>

        </div>
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
