@extends('layout.app')

@section('title', 'Daftar Buku')

@section('content')

<h2 class="mb-4">Daftar Koleksi Buku</h2>

<div class="row g-4">

    @foreach ($buku as $item)

    <div class="col-md-4">
        <div class="book-card">

            <h5 class="fw-bold">{{ $item['judul'] }}</h5>

            <p class="text-muted mb-1">
                Penulis: {{ $item['penulis'] }}
            </p>

            <p>
                Kategori: {{ $item['kategori'] }}
            </p>

            <h6 class="text-primary">
                Rp{{ number_format($item['harga'], 0, ',', '.') }}
            </h6>

            <a href="/buku/{{ $item['id'] }}"
               class="btn btn-dark mt-2">
                Lihat Detail
            </a>

        </div>
    </div>

    @endforeach

</div>

@endsection
