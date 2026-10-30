# Praktikum Laravel - Routing dan MVC

**Nama:** [Nama Lengkap]  
**NIM:** [C2483207013]  

## Tema Proyek
**Katalog Buku (BookStore)**

## Deskripsi Aplikasi

BookStore merupakan website katalog buku sederhana yang dikembangkan menggunakan framework Laravel. Website ini menyediakan informasi mengenai koleksi buku, meliputi judul, penulis, kategori, harga, dan deskripsi buku.

Aplikasi ini dibuat untuk menerapkan konsep Routing, Controller, dan View (MVC) dalam pengembangan website menggunakan Laravel.

## Fitur dan Halaman

Website BookStore memiliki lima halaman utama:

1. **Beranda:** Menampilkan halaman utama website.
2. **Tentang Toko:** Menampilkan informasi mengenai BookStore.
3. **Daftar Buku:** Menampilkan koleksi buku yang tersedia.
4. **Kategori Buku:** Menampilkan kategori buku.
5. **Detail Buku:** Menampilkan informasi lengkap berdasarkan ID buku.

## Implementasi Routing, Controller, dan View

### 1. Routing

Routing digunakan untuk mengatur alamat URL dan menghubungkan permintaan pengguna dengan Controller.

Route yang digunakan:

| URL | Fungsi |
|---|---|
| `/` | Beranda |
| `/tentang` | Tentang Toko |
| `/buku` | Daftar Buku |
| `/kategori` | Kategori Buku |
| `/buku/{id}` | Detail Buku |

### 2. Controller

Controller digunakan untuk mengelola data dan menghubungkan data dengan View.

Controller yang digunakan:
- HomeController
- BukuController

Data buku disimpan dalam bentuk array PHP di dalam BukuController.

### 3. View

View digunakan untuk menampilkan informasi kepada pengguna menggunakan Blade Template.

Implementasi Blade yang digunakan:
- `@extends`
- `@section`
- `@yield`
- `@foreach`
- Interpolasi data menggunakan `{{ }}`

## Screenshot Website

### Halaman Beranda

![Halaman Beranda](screenshots/beranda.png)

### Halaman Daftar Buku

![Halaman Daftar Buku](screenshots/daftar.png)

### Halaman Detail Buku

![Halaman Detail Buku](screenshots/detail.png)

## Teknologi yang Digunakan

- Laravel
- PHP
- HTML
- CSS
- Bootstrap
- Blade Template

## Cara Menjalankan Proyek

1. Clone repository.
2. Masuk ke direktori proyek.
3. Jalankan `composer install`.
4. Jalankan `php artisan serve`.
5. Buka `http://127.0.0.1:8000` melalui browser.

---

**Universitas Muhammadiyah Tasikmalaya**  
Program Studi Pendidikan Teknologi Informasi  
2026
