@extends('layout.app')

@section('title', 'Kategori Buku')

@section('content')

<h2 class="mb-4">Kategori Buku</h2>

<div class="row g-3">

    @foreach ($kategori as $item)

    <div class="col-md-4">
        <div class="book-card">
            <h5>{{ $item }}</h5>
            <p class="text-muted">
                Kategori koleksi BookStore.
            </p>
            <a href="/buku" class="btn btn-outline-dark">
                Lihat Buku
            </a>
        </div>
    </div>

    @endforeach

</div>

@endsection
