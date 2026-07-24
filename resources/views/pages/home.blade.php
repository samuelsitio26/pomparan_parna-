@extends('layouts.app')

@section('title', 'Beranda – PARNA Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection

@section('content')
<!-- Hero Section Home -->
<section class="home-hero-wrapper">
    <!-- Left Vertical Gorga Batak Strip -->
    <div class="hero-gorga-strip">
        <img src="{{ asset('images/gorga_banner.png') }}" alt="Gorga Batak" class="gorga-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
        <div class="gorga-svg-fallback" style="display: none;">
            <svg width="60" height="600" viewBox="0 0 60 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="60" height="600" fill="#7A1D1D"/>
                <path d="M30 0 L60 30 L30 60 L0 30 Z" fill="#C59B27" opacity="0.4"/>
                <path d="M30 60 L60 90 L30 120 L0 90 Z" fill="#C59B27" opacity="0.4"/>
                <circle cx="30" cy="30" r="10" fill="#FAF6F0"/>
                <circle cx="30" cy="90" r="10" fill="#FAF6F0"/>
            </svg>
        </div>
    </div>

    <!-- Main Hero Banner Background & Content -->
    <div class="home-hero-main">
        <div class="home-hero-content">
            <p class="script-sub">Selamat Datang di</p>
            <h1 class="hero-title">PARNA</h1>
            <h3 class="hero-subtitle">Parsadaan Pomparan Ni Raja Nai Ambaton</h3>
            <p class="hero-desc">
                Bersatu dalam adat, berpegang pada tarombo, melestarikan warisan leluhur Raja Nai Ambaton untuk generasi masa depan.
            </p>
            <div class="hero-actions">
                <a href="{{ route('tentang') }}" class="btn-hero-primary">
                    <i class="bi bi-person-fill"></i> PELAJARI LEBIH LANJUT
                </a>
                <a href="{{ route('tarombo') }}" class="btn-hero-outline">
                    <i class="bi bi-journal-text"></i> LIHAT TAROMBO
                </a>
            </div>
            <!-- Slider Dots Indicator (Matching Mockup) -->
            <div class="hero-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
</section>

<!-- Floating Highlights Row (5 Circle Pill Cards) -->
<div class="highlights-bar">
    <div class="highlights-grid">
        <div class="highlight-item">
            <div class="highlight-icon">
                <i class="bi bi-people-fill"></i>
            </div>
            <div class="highlight-text">
                <h5>1 Leluhur</h5>
                <p>Raja Nai Ambaton Tuan Sorba Di Julu</p>
            </div>
        </div>

        <div class="highlight-item">
            <div class="highlight-icon">
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="highlight-text">
                <h5>{{ $totalMargaCount }}+ Marga</h5>
                <p>Pomparan Raja Nai Ambaton (Parna)</p>
            </div>
        </div>

        <div class="highlight-item">
            <div class="highlight-icon">
                <i class="bi bi-suit-heart-fill"></i>
            </div>
            <div class="highlight-text">
                <h5>Satu Adat</h5>
                <p>Dalihan Na Tolu Pemersatu kita</p>
            </div>
        </div>

        <div class="highlight-item">
            <div class="highlight-icon">
                <i class="bi bi-book-fill"></i>
            </div>
            <div class="highlight-text">
                <h5>Satu Tarombo</h5>
                <p>Akar yang sama, turun temurun</p>
            </div>
        </div>

        <div class="highlight-item">
            <div class="highlight-icon">
                <i class="bi bi-shield-check"></i>
            </div>
            <div class="highlight-text">
                <h5>Satu Tujuan</h5>
                <p>Melestarikan adat dan budaya Batak</p>
            </div>
        </div>
    </div>
</div>

<!-- Main Featured Grid Section -->
<div class="layout-container" style="margin-top: 1.5rem; margin-bottom: 1.5rem;">
    <div class="home-featured-grid">
        <!-- Card 1: Tentang Parna -->
        <div class="featured-card">
            <div class="featured-card-body">
                <h3>TENTANG PARNA</h3>
                <div class="card-gorga-divider"></div>
                <p>
                    Parna adalah persekutuan besar keturunan Raja Nai Ambaton (Tuan Sorba Di Julu) yang terdiri dari berbagai marga dalam satu ikatan adat dan tarombo.
                </p>
            </div>
            <a href="{{ route('tentang') }}" class="btn-card-action">
                SELANGKAPNYA <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Card 2: Marga Parna -->
        <div class="featured-card">
            <div class="featured-card-body">
                <h3>MARGA PARNA</h3>
                <div class="card-gorga-divider"></div>
                <p>
                    Jelajahi daftar marga-marga yang tergabung dalam Parsadaan Parna. Cari tahu asal-usul dan hubungan kekerabatan setiap marga.
                </p>
            </div>
            <a href="{{ route('marga') }}" class="btn-card-action">
                LIHAT DAFTAR MARGA <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Card 3: Tarombo Parna -->
        <div class="featured-card featured-tarombo-card">
            <div class="featured-card-body">
                <h3>TAROMBO PARNA</h3>
                <div class="card-gorga-divider"></div>
                <div class="tarombo-card-content">
                    <p>
                        Tarombo adalah silsilah yang menghubungkan kita dengan leluhur kita. Pelajari garis keturunan Raja Nai Ambaton hingga marga-marga Parna saat ini.
                    </p>
                    <div class="tree-vector-wrapper">
                        <img src="{{ asset('images/batak_tree.png') }}" alt="Pohon Batak Tarombo" class="tree-vector-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        <div class="tree-svg-fallback" style="display: none;">
                            <svg width="90" height="90" viewBox="0 0 100 100" fill="#8C6F4E">
                                <path d="M50 10 C30 30 20 50 20 70 C20 85 35 90 50 90 C65 90 80 85 80 70 C80 50 70 30 50 10 Z"/>
                                <rect x="46" y="70" width="8" height="25" fill="#5D1A1A"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('tarombo') }}" class="btn-card-action">
                LIHAT TAROMBO <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Card 4: Berita & Kegiatan -->
        <div class="featured-card featured-news-card">
            <div class="featured-card-body">
                <h3>BERITA & KEGIATAN</h3>
                <div class="card-gorga-divider"></div>
                <div class="home-news-list">
                    <div class="home-news-item">
                        <img src="{{ asset('images/berita_1.png') }}" alt="Pesta Parsadaan Parna" class="news-thumb" onerror="this.src='{{ asset('images/hero_toba.png') }}';">
                        <div class="news-info">
                            <h5><a href="{{ route('berita') }}">Pesta Parsadaan Parna 2024</a></h5>
                            <span class="news-date">12 Mei 2024</span>
                        </div>
                    </div>
                    <div class="home-news-item">
                        <img src="{{ asset('images/berita_2.png') }}" alt="Rapat Pengurus Pusat" class="news-thumb" onerror="this.src='{{ asset('images/hero_toba.png') }}';">
                        <div class="news-info">
                            <h5><a href="{{ route('berita') }}">Rapat Pengurus Pusat Parna</a></h5>
                            <span class="news-date">28 April 2024</span>
                        </div>
                    </div>
                    <div class="home-news-item">
                        <img src="{{ asset('images/berita_1.png') }}" alt="Pelantikan Pengurus Wilayah" class="news-thumb" onerror="this.src='{{ asset('images/hero_toba.png') }}';">
                        <div class="news-info">
                            <h5><a href="{{ route('berita') }}">Pelantikan Pengurus Wilayah Parna Sumatera Utara</a></h5>
                            <span class="news-date">10 April 2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('berita') }}" class="btn-card-action w-100 text-center">
                LIHAT SEMUA BERITA <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Stats Counter Bar -->
<section class="stats-counter-bar">
    <div class="stats-counter-grid">
        <div class="stat-box">
            <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
            <div class="stat-number">58+</div>
            <div class="stat-label">MARGA PARNA</div>
        </div>

        <div class="stat-box">
            <div class="stat-icon"><i class="bi bi-person-fill-gear"></i></div>
            <div class="stat-number">1000+</div>
            <div class="stat-label">KELUARGA TERGABUNG</div>
        </div>

        <div class="stat-box">
            <div class="stat-icon"><i class="bi bi-geo-alt-fill"></i></div>
            <div class="stat-number">20+</div>
            <div class="stat-label">WILAYAH</div>
        </div>

        <div class="stat-box">
            <div class="stat-icon"><i class="bi bi-handshake-fill"></i></div>
            <div class="stat-number">1</div>
            <div class="stat-label">IKATAN ADAT</div>
        </div>
    </div>
</section>

<!-- Galeri Section (Mobile Visible) -->
<section class="home-galeri-section">
    <div class="home-section-header">
        <h2>GALERI</h2>
        <div class="section-gold-divider"></div>
    </div>
    <div class="home-galeri-carousel-wrapper">
        <button class="galeri-nav galeri-prev" onclick="scrollGaleri(-1)" aria-label="Sebelumnya"><i class="bi bi-chevron-left"></i></button>
        <div class="home-galeri-track" id="galeriTrack">
            <div class="home-galeri-item">
                <img src="{{ asset('images/galeri_1.png') }}" alt="Galeri Parna 1" onerror="this.src='{{ asset('images/hero_toba.png') }}';">
            </div>
            <div class="home-galeri-item">
                <img src="{{ asset('images/galeri_2.png') }}" alt="Galeri Parna 2" onerror="this.src='{{ asset('images/hero_toba.png') }}';">
            </div>
            <div class="home-galeri-item">
                <img src="{{ asset('images/galeri_3.png') }}" alt="Galeri Parna 3" onerror="this.src='{{ asset('images/hero_toba.png') }}';">
            </div>
            <div class="home-galeri-item">
                <img src="{{ asset('images/hero_toba.png') }}" alt="Galeri Parna 4" onerror="this.src='{{ asset('images/hero_toba.png') }}';">
            </div>
        </div>
        <button class="galeri-nav galeri-next" onclick="scrollGaleri(1)" aria-label="Berikutnya"><i class="bi bi-chevron-right"></i></button>
    </div>
    <div class="home-section-footer">
        <a href="{{ route('galeri') }}" class="btn-card-action">LIHAT GALERI <i class="bi bi-arrow-right"></i></a>
    </div>
</section>

<!-- Kontak Kami Section (Mobile Visible) -->
<section class="home-kontak-section">
    <div class="home-section-header">
        <h2>KONTAK KAMI</h2>
        <div class="section-gold-divider"></div>
    </div>
    <ul class="home-kontak-list">
        <li><i class="bi bi-telephone-fill"></i> +62 812-3456-7890</li>
        <li><i class="bi bi-envelope-fill"></i> info@parna.or.id</li>
        <li><i class="bi bi-geo-alt-fill"></i> Sumatera Utara, Indonesia</li>
    </ul>
    <div class="home-kontak-social">
        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" aria-label="Youtube"><i class="bi bi-youtube"></i></a>
    </div>
</section>

@endsection

@section('scripts')
<script>
function scrollGaleri(dir) {
    const track = document.getElementById('galeriTrack');
    const item = track.querySelector('.home-galeri-item');
    const itemWidth = item ? item.offsetWidth + 12 : 200;
    track.scrollBy({ left: dir * itemWidth, behavior: 'smooth' });
}
</script>
@endsection
