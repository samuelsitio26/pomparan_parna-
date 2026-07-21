<!-- Bootstrap 5 Senior-Friendly Header Navbar -->
<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top shadow-sm py-2 py-md-3">
    <div class="container-xxl">
        <!-- Brand Logo -->
        <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ route('home') }}">
            <div class="brand-icon rounded-3 d-flex align-items-center justify-content-center text-warning" style="width: 48px; height: 48px; background-color: var(--parna-maroon);">
                <i class="bi bi-shield-shaded fs-3"></i>
            </div>
            <div class="brand-text">
                <h1 class="h4 mb-0 fw-bold" style="font-family: var(--font-heading); color: var(--parna-maroon); letter-spacing: 1px;">PARNA</h1>
                <p class="small text-muted mb-0 text-uppercase fw-semibold" style="font-size: 0.7rem; letter-spacing: 0.8px;">Raja Nai Ambaton</p>
            </div>
        </a>

        <!-- Mobile Toggler Button (Ukuran Besar Mudah Ditekan) -->
        <button class="navbar-toggler border-2 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarParnaMenu" aria-controls="navbarParnaMenu" aria-expanded="false" aria-label="Buka Menu Navigation">
            <span class="navbar-toggler-icon fs-4"></span>
        </button>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarParnaMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link fw-bold px-3 py-2 fs-6 {{ request()->routeIs('home') ? 'active text-danger border-bottom border-danger border-2' : 'text-dark' }}" href="{{ route('home') }}">
                        <i class="bi bi-house-door-fill text-danger me-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold px-3 py-2 fs-6 {{ request()->routeIs('tarombo') ? 'active text-danger border-bottom border-danger border-2' : 'text-dark' }}" href="{{ route('tarombo') }}">
                        <i class="bi bi-diagram-3-fill text-danger me-1"></i> Tarombo Silsilah
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold px-3 py-2 fs-6 {{ request()->routeIs('marga') ? 'active text-danger border-bottom border-danger border-2' : 'text-dark' }}" href="{{ route('marga') }}">
                        <i class="bi bi-card-checklist text-danger me-1"></i> Daftar Marga
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold px-3 py-2 fs-6 {{ request()->routeIs('berita') ? 'active text-danger border-bottom border-danger border-2' : 'text-dark' }}" href="{{ route('berita') }}">
                        <i class="bi bi-newspaper text-danger me-1"></i> Berita & Kegiatan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold px-3 py-2 fs-6 {{ request()->routeIs('tentang') ? 'active text-danger border-bottom border-danger border-2' : 'text-dark' }}" href="{{ route('tentang') }}">
                        <i class="bi bi-info-circle-fill text-danger me-1"></i> Tentang Parna
                    </a>
                </li>
            </ul>

            <!-- Tombol Aksi Utama (Ukuran Besar & Jelas) -->
            <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                <a href="{{ route('tarombo') }}" class="btn btn-lg btn-danger rounded-pill fw-bold fs-6 px-4 shadow-sm" style="background-color: var(--parna-maroon); border-color: var(--parna-maroon);">
                    <i class="bi bi-search me-1"></i> CARI TAROMBO
                </a>
            </div>
        </div>
    </div>
</nav>
