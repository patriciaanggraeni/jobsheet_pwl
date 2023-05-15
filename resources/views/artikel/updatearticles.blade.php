<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Data Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Data Artikel</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">

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

            <div class="container">
                <form action="/articles/{{ $articles->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {!! isset($articles) ? method_field('PUT') : '' !!}
                    <div class="form-group">
                        <label for="title">Judul:</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" required="required" name="title" value="{{ $articles->title }}"></br>
                        @error('title')
                            <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Konten:</label>
                        <input type="text" class="form-control @error('content') is-invalid @enderror" required="required" name="content" value="{{ $articles->content }}"></br>
                        @error('content')
                            <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar:</label>
                        <input type="file" class="form-control @error('featured_image') is-invalid @enderror" required="required" name="image" value="{{ $articles->featured_image }}"></br>
                        <img width="150px" src="{{ asset('storage/' . $articles->featured_image) }}">
                        @error('featured_image')
                            <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>

            <div class="card-footer"></div>
        </div>
    </section>
</div>
