<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Administrator – PARNA</title>

    <!-- Google Fonts & Bootstrap 5 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --parna-maroon: #4A1515;
            --parna-gold: #C59B27;
            --parna-bg: #FAF6F0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--parna-bg);
            min-height: 100vh;
        }

        .admin-navbar {
            background-color: var(--parna-maroon);
            border-bottom: 3px solid var(--parna-gold);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg admin-navbar navbar-dark py-3">
    <div class="container-xxl">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-shield-shaded text-warning fs-3"></i>
            <span class="fw-bold" style="font-family: 'Cinzel', serif;">PANEL ADMIN PARNA</span>
        </a>

        <div class="d-flex align-items-center gap-3">
            <span class="text-light small"><i class="bi bi-person-circle text-warning"></i> {{ Auth::user()->name ?? 'Admin' }}</span>
            <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-warning btn-sm rounded-pill px-3">
                    <i class="bi bi-box-arrow-right"></i> Keluar
                </button>
            </form>
        </div>
    </div>
</nav>

<div class="container-xxl my-5">
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-white">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h2 class="h4 fw-bold text-danger mb-1" style="color: var(--parna-maroon) !important;">Selamat Datang di Panel Pengurus Admin</h2>
                <p class="text-secondary small mb-0">Kelola data Marga, Silsilah Tarombo, Berita, dan Galeri Parsadaan Parna secara terpusat.</p>
            </div>
            <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill fw-bold px-3">
                <i class="bi bi-globe me-1"></i> Lihat Website Utama
            </a>
        </div>
    </div>

    <!-- Quick Stats Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                <i class="bi bi-card-checklist fs-1 text-danger mb-2"></i>
                <h3 class="h2 fw-bold text-dark mb-0">{{ $margaCount }}</h3>
                <span class="small text-muted fw-bold text-uppercase">Marga Parna</span>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                <i class="bi bi-diagram-3-fill fs-1 text-warning mb-2"></i>
                <h3 class="h2 fw-bold text-dark mb-0">{{ $taromboCount }}</h3>
                <span class="small text-muted fw-bold text-uppercase">Node Silsilah Tarombo</span>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                <i class="bi bi-newspaper fs-1 text-danger mb-2"></i>
                <h3 class="h2 fw-bold text-dark mb-0">{{ $beritaCount }}</h3>
                <span class="small text-muted fw-bold text-uppercase">Artikel & Berita</span>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                <i class="bi bi-images fs-1 text-warning mb-2"></i>
                <h3 class="h2 fw-bold text-dark mb-0">{{ $galeriCount }}</h3>
                <span class="small text-muted fw-bold text-uppercase">Album Galeri</span>
            </div>
        </div>
    </div>
</div>

</body>
</html>
