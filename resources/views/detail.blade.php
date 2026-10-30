@extends('layout.app')

@section('title', 'Detail Buku')

@section('content')

<div class="book-card">

    <h2>{{ $buku['judul'] }}</h2>

    <hr>

    <p>
        <strong>Penulis:</strong>
        {{ $buku['penulis'] }}
    </p>

    <p>
        <strong>Kategori:</strong>
        {{ $buku['kategori'] }}
    </p>

    <p>
        <strong>Harga:</strong>
        Rp{{ number_format($buku['harga'], 0, ',', '.') }}
    </p>

    <p>
        <strong>Deskripsi:</strong>
        {{ $buku['deskripsi'] }}
    </p>

    <a href="/buku" class="btn btn-dark mt-3">
        Kembali ke Daftar Buku
    </a>

</div>

@endsection
