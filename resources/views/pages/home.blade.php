@extends('layouts.app')

@section('title', 'Beranda – PARNA Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection

@section('content')
<!-- Hero Section Home -->
<section class="home-hero">
    <div class="home-hero-content">
        <p class="script-sub">Selamat Datang di</p>
        <h1>PARNA</h1>
        <h3>Parsadaan Pomparan Ni Raja Nai Ambaton</h3>
        <p>
            Bersatu dalam adat, berpegang pada tarombo, melestarikan warisan leluhur Raja Nai Ambaton untuk generasi masa depan.
        </p>
        <div class="hero-actions">
            <a href="{{ route('tentang') }}" class="btn-primary-maroon" style="padding: 12px 28px;">
                <i class="bi bi-book-fill"></i> PELAJARI LEBIH LANJUT
            </a>
            <a href="{{ route('tarombo') }}" class="btn-outline-maroon" style="padding: 11px 28px;">
                <i class="bi bi-diagram-3-fill"></i> LIHAT TAROMBO
            </a>
        </div>
    </div>
</section>

<!-- Floating Highlights Row (5 Cards) -->
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
                <i class="bi bi-shield-check"></i>
            </div>
            <div class="highlight-text">
                <h5>{{ $totalMargaCount }}+ Marga</h5>
                <p>Pomparan Raja Nai Ambaton (Parna)</p>
            </div>
        </div>

        <div class="highlight-item">
            <div class="highlight-icon">
                <i class="bi bi-heart-fill"></i>
            </div>
            <div class="highlight-text">
                <h5>Satu Adat</h5>
                <p>Dalihan Na Tolu Pemersatu kita</p>
            </div>
        </div>

        <div class="highlight-item">
            <div class="highlight-icon">
                <i class="bi bi-book-half"></i>
            </div>
            <div class="highlight-text">
                <h5>Satu Tarombo</h5>
                <p>Akar yang sama, turun temurun</p>
            </div>
        </div>

        <div class="highlight-item">
            <div class="highlight-icon">
                <i class="bi bi-shield-fill"></i>
            </div>
            <div class="highlight-text">
                <h5>Satu Tujuan</h5>
                <p>Melestarikan adat dan budaya Batak</p>
            </div>
        </div>
    </div>
</div>

<!-- Main Featured Grid Section -->
<div class="layout-container" style="margin-top: 0;">
    <div class="home-featured-grid">
        <!-- Card 1: Tentang Parna -->
        <div class="featured-card">
            <div>
                <h3>TENTANG PARNA</h3>
                <p>
                    Parna adalah persekutuan besar keturunan Raja Nai Ambaton (Tuan Sorba Di Julu) yang terdiri dari berbagai marga dalam satu ikatan adat dan tarombo.
                </p>
            </div>
            <a href="{{ route('tentang') }}" class="btn-outline-maroon" style="padding: 8px 18px; font-size: 0.8rem;">
                SELANGKAPNYA <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Card 2: Marga Parna -->
        <div class="featured-card">
            <div>
                <h3>MARGA PARNA</h3>
                <p>
                    Jelajahi daftar marga-marga yang tergabung dalam Parsadaan Parna. Cari tahu asal-usul dan hubungan kekerabatan setiap marga.
                </p>
            </div>
            <a href="{{ route('marga') }}" class="btn-outline-maroon" style="padding: 8px 18px; font-size: 0.8rem;">
                LIHAT DAFTAR MARGA <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Card 3: Tarombo Parna -->
        <div class="featured-card">
            <div>
                <h3>TAROMBO PARNA</h3>
                <p>
                    Tarombo adalah silsilah yang menghubungkan kita dengan leluhur kita. Pelajari garis keturunan Raja Nai Ambaton hingga marga-marga Parna saat ini.
                </p>
                <div style="text-align: center; margin-top: 1rem;">
                    <img src="{{ asset('images/batak_tree.png') }}" alt="Pohon Batak" style="max-width: 110px; margin: 0 auto; opacity: 0.85;" onerror="this.style.display='none'">
                </div>
            </div>
            <a href="{{ route('tarombo') }}" class="btn-outline-maroon" style="padding: 8px 18px; font-size: 0.8rem; margin-top: 1rem;">
                LIHAT TAROMBO <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Card 4: Berita & Kegiatan (Data Dinamis DB) -->
        <div class="featured-card" style="padding: 1.4rem;">
            <div>
                <h3 style="font-size: 1.05rem;">BERITA & KEGIATAN</h3>
                <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 1.2rem;">
                    @foreach($featuredBerita as $berita)
                        <div style="display: flex; gap: 10px; align-items: flex-start; border-bottom: 1px solid var(--parna-border); padding-bottom: 8px;">
                            <img src="{{ asset('images/hero_toba.jpg') }}" style="width: 50px; height: 40px; object-fit: cover; border-radius: 4px; flex-shrink: 0;">
                            <div>
                                <h5 style="font-size: 0.78rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 2px; line-height: 1.2;">
                                    <a href="{{ route('berita.detail', $berita->slug) }}">{{ $berita->title }}</a>
                                </h5>
                                <small style="font-size: 0.68rem; color: var(--parna-text-muted);">{{ optional($berita->event_date)->format('d M Y') }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a href="{{ route('berita') }}" class="btn-outline-maroon" style="padding: 8px 18px; font-size: 0.78rem; width: 100%; text-align: center; justify-content: center;">
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
            <div class="stat-number">{{ $totalMargaCount }}+</div>
            <div class="stat-label">MARGA PARNA</div>
        </div>

        <div class="stat-box">
            <div class="stat-icon"><i class="bi bi-house-heart-fill"></i></div>
            <div class="stat-number">1000+</div>
            <div class="stat-label">KELUARGA TERGABUNG</div>
        </div>

        <div class="stat-box">
            <div class="stat-icon"><i class="bi bi-geo-alt-fill"></i></div>
            <div class="stat-number">20+</div>
            <div class="stat-label">WILAYAH</div>
        </div>

        <div class="stat-box">
            <div class="stat-icon"><i class="bi bi-shield-check"></i></div>
            <div class="stat-number">1</div>
            <div class="stat-label">IKATAN ADAT</div>
        </div>
    </div>
</section>
@endsection
