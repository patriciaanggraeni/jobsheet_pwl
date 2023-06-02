@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Artikel</h3>
            </div>
            <div class="card-body">
                <form action="/articles/{{ $articles->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {!! isset($articles) ? method_field('PUT') : '' !!}
                    <div class="form-group">
                        <label for="title">Judul:</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" required="required"
                            name="title" value="{{ $articles->title }}"></br>
                        @error('title')
                            <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Konten:</label>
                        <input type="text" class="form-control @error('content') is-invalid @enderror"
                            required="required" name="content" value="{{ $articles->content }}"></br>
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
        </div>
    </section>
@endsection
