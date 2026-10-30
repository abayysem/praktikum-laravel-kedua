@extends('layout.app')

@section('title', 'Beranda')

@section('content')

<div class="hero">
    <h1 class="fw-bold">Selamat Datang di Gremery libry</h1>
    <p>Temukan berbagai buku menarik untuk menambah wawasan dan pengetahuan.</p>
    <a href="/buku" class="btn btn-light mt-3">
        Lihat Koleksi Buku
    </a>
</div>

<div class="mt-5">
    <h3>Kenapa Memilih Gremery libry?</h3>
    <p>Kami menyediakan berbagai pilihan buku mulai dari novel,
    fantasi, hingga buku pengembangan diri.</p>
</div>

@endsection
