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
            <a href="{{ url('/tentang-parna') }}" class="btn-primary-maroon">
                <i class="bi bi-book-fill"></i> PELAJARI LEBIH LANJUT
            </a>
            <a href="{{ url('/tarombo') }}" class="btn-outline-maroon">
                <i class="bi bi-diagram-3-fill"></i> LIHAT TAROMBO
            </a>
        </div>
        
        <!-- Slider Dots -->
        <div style="display: flex; gap: 6px; margin-top: 2.5rem;">
            <span style="width: 24px; height: 8px; background: var(--parna-maroon); border-radius: 4px;"></span>
            <span style="width: 8px; height: 8px; background: #CFC2B4; border-radius: 50%;"></span>
            <span style="width: 8px; height: 8px; background: #CFC2B4; border-radius: 50%;"></span>
        </div>
    </div>
</section>

<!-- Floating Highlight Bar (5 Cards) -->
<div class="highlights-bar">
    <div class="highlights-grid">
        <!-- Item 1 -->
        <div class="highlight-item">
            <div class="highlight-icon"><i class="bi bi-people-fill"></i></div>
            <div class="highlight-text">
                <h5>1 Leluhur</h5>
                <p>Raja Nai Ambaton Tuan Sorba Di Julu</p>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="highlight-item">
            <div class="highlight-icon"><i class="bi bi-person-vcard-fill"></i></div>
            <div class="highlight-text">
                <h5>58+ Marga</h5>
                <p>Pomparan Raja Nai Ambaton (Parna)</p>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="highlight-item">
            <div class="highlight-icon"><i class="bi bi-suit-heart-fill"></i></div>
            <div class="highlight-text">
                <h5>Satu Adat</h5>
                <p>Dalihan Na Tolu Pemersatu kita</p>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="highlight-item">
            <div class="highlight-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
            <div class="highlight-text">
                <h5>Satu Tarombo</h5>
                <p>Akar yang sama, turun temurun</p>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="highlight-item">
            <div class="highlight-icon"><i class="bi bi-shield-fill-check"></i></div>
            <div class="highlight-text">
                <h5>Satu Tujuan</h5>
                <p>Melestarikan adat dan budaya Batak</p>
            </div>
        </div>
    </div>
</div>

<!-- Main Featured Grid Section -->
<div class="layout-container">
    <div class="home-featured-grid">
        <!-- Card 1: Tentang Parna -->
        <div class="featured-card">
            <div>
                <h3>TENTANG PARNA</h3>
                <p>
                    Parna adalah persekutuan besar keturunan Raja Nai Ambaton (Tuan Sorba Di Julu) yang terdiri dari berbagai marga dalam satu ikatan adat dan tarombo.
                </p>
            </div>
            <div>
                <a href="{{ url('/tentang-parna') }}" class="btn-outline-maroon btn-block">
                    SELENGKAPNYA <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Card 2: Marga Parna -->
        <div class="featured-card">
            <div>
                <h3>MARGA PARNA</h3>
                <p>
                    Jelajahi daftar marga-marga yang tergabung dalam Parsadaan Parna. Cari tahu asal-usul dan hubungan kekerabatan setiap marga.
                </p>
            </div>
            <div>
                <a href="{{ url('/marga-parna') }}" class="btn-outline-maroon btn-block">
                    LIHAT DAFTAR MARGA <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Card 3: Tarombo Parna -->
        <div class="featured-card" style="text-align: center;">
            <div>
                <h3 style="text-align: left;">TAROMBO PARNA</h3>
                <p style="text-align: left;">
                    Tarombo adalah silsilah yang menghubungkan kita dengan leluhur kita. Pelajari garis keturunan Raja Nai Ambaton hingga marga-marga Parna saat ini.
                </p>
                <div style="margin: 1rem 0;">
                    <img src="/images/batak_tree.png" alt="Tarombo Batak" style="max-height: 140px; margin: 0 auto; opacity: 0.85;">
                </div>
            </div>
            <div>
                <a href="{{ url('/tarombo') }}" class="btn-outline-maroon btn-block">
                    LIHAT TAROMBO <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Card 4: Berita & Kegiatan List -->
        <div class="featured-card">
            <div>
                <h3>BERITA & KEGIATAN</h3>
                <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 1.5rem;">
                    <!-- News Item 1 -->
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <img src="/images/batak_festival.jpg" alt="Pesta Parna" style="width: 55px; height: 42px; border-radius: 6px; object-fit: cover;">
                        <div>
                            <h5 style="font-size: 0.8rem; font-weight: 700; color: var(--parna-maroon); line-height: 1.2;">Pesta Parsadaan Parna 2024</h5>
                            <p style="font-size: 0.7rem; color: var(--parna-text-muted); margin: 0;">12 Mei 2024</p>
                        </div>
                    </div>
                    <!-- News Item 2 -->
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <div style="width: 55px; height: 42px; border-radius: 6px; background: #581C1C; color: #FFF; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;"><i class="bi bi-journal-text"></i></div>
                        <div>
                            <h5 style="font-size: 0.8rem; font-weight: 700; color: var(--parna-maroon); line-height: 1.2;">Rapat Pengurus Pusat Parna</h5>
                            <p style="font-size: 0.7rem; color: var(--parna-text-muted); margin: 0;">28 April 2024</p>
                        </div>
                    </div>
                    <!-- News Item 3 -->
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <div style="width: 55px; height: 42px; border-radius: 6px; background: #8C6F4E; color: #FFF; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;"><i class="bi bi-award-fill"></i></div>
                        <div>
                            <h5 style="font-size: 0.8rem; font-weight: 700; color: var(--parna-maroon); line-height: 1.2;">Pelantikan Pengurus Wilayah Sumut</h5>
                            <p style="font-size: 0.7rem; color: var(--parna-text-muted); margin: 0;">10 April 2024</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ url('/berita-kegiatan') }}" class="btn-outline-maroon btn-block">
                    LIHAT SEMUA BERITA <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bottom Stats Counter Bar -->
<section class="stats-counter-bar">
    <div class="stats-counter-grid">
        <!-- Stat 1 -->
        <div class="stat-box">
            <i class="bi bi-people-fill stat-icon"></i>
            <div class="stat-number">58+</div>
            <div class="stat-label">MARGA PARNA</div>
        </div>
        <!-- Stat 2 -->
        <div class="stat-box">
            <i class="bi bi-person-arms-up stat-icon"></i>
            <div class="stat-number">1000+</div>
            <div class="stat-label">KELUARGA TERGABUNG</div>
        </div>
        <!-- Stat 3 -->
        <div class="stat-box">
            <i class="bi bi-geo-alt-fill stat-icon"></i>
            <div class="stat-number">20+</div>
            <div class="stat-label">WILAYAH</div>
        </div>
        <!-- Stat 4 -->
        <div class="stat-box">
            <i class="bi bi-hand-thumbs-up-fill stat-icon"></i>
            <div class="stat-number">1</div>
            <div class="stat-label">IKATAN ADAT</div>
        </div>
    </div>
</section>
@endsection
