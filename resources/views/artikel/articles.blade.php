@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Artikel</h3>
            </div>
            <div class="card-body">
                @if ($pesan = Session::get('success'))
                    <div class="alert alert-success mt-3" role="alert">
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
                            @foreach ($articles as $i => $a)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $a->title }}</td>
                                    <td>{{ $a->content }}</td>
                                    <td>
                                        <img src="{{ 'storage/' . $a->featured_image }}" alt="pictures"
                                            style="width: 100px; height: 100px;">
                                    </td>
                                    <td class="">
                                        <a href="{{ url('/articles/' . $a->id . '/edit') }}" class="btn btn-sm btn-primary">
                                            Edit
                                        </a>
                                        <form class="d-inline" method="POST" action="{{ url('/articles/' . $a->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" href="{{ url('/articles/' . $a->id) }}"
                                                class="btn btn-sm btn-danger">
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
@endsection
