<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Artikel</li>
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
          <h3 class="card-title">Artikel Ku</h3>

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

            <a href="{{ url('articles/create') }}" class="btn btn-sm btn-success my-2">Tambah +</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Picture</th>
                    </tr>
                </thead>
                <tbody>

                    @if ($articles->count() > 0)
                    @foreach($articles as $i => $a)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $a->title }}</td>
                            <td>{{ $a->content }}</td>
                            <td>
                                <img src="{{ 'storage/' . $a->featured_image }}" alt="pictures" style="width: 100px; height: 100px;">
                            </td>
                            <td class="">
                                <a href="{{ url('/articles/' . $a->id . '/edit') }}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>
                                <form class="d-inline" method="POST" action="{{ url('/articles/' . $a->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="{{ url('/articles/' . $a->id) }}" class="btn btn-sm btn-danger">
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
        <div class="card-footer">
            <hr>
            <form action="{{ url('/article/exportpdf') }}" method="GET">
                <button type="submit" class="btn btn-sm btn-primary">Export</button>
            </form>
        </div>
      </div>
    </section>
</div>
