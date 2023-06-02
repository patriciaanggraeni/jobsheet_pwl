@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Artikel</h3>
            </div>
            <div class="card-body">
                <form action="/articles" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul:</label>
                        <input type="text" class="form-control" required="required" name="title"></br>

                        <label for="content">Konten:</label>
                        <textarea type="text" class="form-control" required="required" name="content"></textarea></br>

                        <label for="image">Gambar:</label>
                        <input type="file" class="form-control" required="required" name="image"></br>

                    </div>

                    <button type="submit" name="submit" class="btn btn-primary float-left">Simpan</button>
                </form>
            </div>
    </section>
@endsection
