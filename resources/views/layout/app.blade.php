<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Gremery libry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f6fa;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: white;
        }

        .hero {
            background: #243447;
            color: white;
            padding: 65px 30px;
            border-radius: 15px;
        }

        .book-card {
            background: white;
            border: none;
            border-radius: 12px;
            padding: 22px;
            height: 100%;
            box-shadow: 0 3px 12px rgba(0,0,0,.06);
        }

        footer {
            margin-top: 60px;
            padding: 20px;
            text-align: center;
            background: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Gremery libry</a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="/">Beranda</a>
            <a class="nav-link" href="/tentang">Tentang</a>
            <a class="nav-link" href="/buku">Daftar Buku</a>
            <a class="nav-link" href="/kategori">Kategori</a>
        </div>
    </div>
</nav>

<main class="container py-4">
    @yield('content')
</main>

<footer>
    <p class="mb-0">© 2026 Gremery libry - Katalog Buku</p>
</footer>

</body>
</html>
