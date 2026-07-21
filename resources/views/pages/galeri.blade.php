@extends('layouts.app')

@section('title', 'Galeri Dokumentasi – Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner">
    <div class="subpage-banner-content">
        <h2>GALERI</h2>
        <p class="tagline">Dokumentasi kegiatan dan momen kebersamaan</p>
        <p class="desc">
            Kumpulan foto kegiatan, pertemuan, dan momen berharga Pomparan Parna di berbagai kesempatan.
        </p>
    </div>
</section>

<!-- Main Container Layout (Left Sidebar + Center Content Grid) -->
<div class="layout-container">
    <div class="grid-2-col-left">
        <!-- LEFT SIDEBAR: KATEGORI & TAHUN -->
        <aside class="sidebar-left">
            <!-- Kategori Menu Card -->
            <div class="sidebar-card">
                <h4 class="sidebar-title">KATEGORI</h4>
                <ul class="sidebar-nav-list">
                    <li class="sidebar-nav-item {{ !request('category') ? 'active' : '' }}">
                        <a href="{{ route('galeri') }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-grid-fill"></i> Semua Galeri</span>
                            <span class="badge" style="background: rgba(255,255,255,0.2); font-size: 0.72rem;">124</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item {{ request('category') == 'Kegiatan Organisasi' ? 'active' : '' }}">
                        <a href="{{ route('galeri', ['category' => 'Kegiatan Organisasi']) }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-people-fill"></i> Kegiatan Organisasi</span>
                            <span class="badge" style="background: rgba(0,0,0,0.06); font-size: 0.72rem;">45</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item {{ request('category') == 'Rapat & Pertemuan' ? 'active' : '' }}">
                        <a href="{{ route('galeri', ['category' => 'Rapat & Pertemuan']) }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-briefcase-fill"></i> Rapat & Pertemuan</span>
                            <span class="badge" style="background: rgba(0,0,0,0.06); font-size: 0.72rem;">28</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item {{ request('category') == 'Pesta & Perayaan' ? 'active' : '' }}">
                        <a href="{{ route('galeri', ['category' => 'Pesta & Perayaan']) }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-balloon-fill"></i> Pesta & Perayaan</span>
                            <span class="badge" style="background: rgba(0,0,0,0.06); font-size: 0.72rem;">22</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item {{ request('category') == 'Sosial & Budaya' ? 'active' : '' }}">
                        <a href="{{ route('galeri', ['category' => 'Sosial & Budaya']) }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-heart-fill"></i> Sosial & Budaya</span>
                            <span class="badge" style="background: rgba(0,0,0,0.06); font-size: 0.72rem;">18</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item {{ request('category') == 'Pelatihan & Seminar' ? 'active' : '' }}">
                        <a href="{{ route('galeri', ['category' => 'Pelatihan & Seminar']) }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-mortarboard-fill"></i> Pelatihan & Seminar</span>
                            <span class="badge" style="background: rgba(0,0,0,0.06); font-size: 0.72rem;">11</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tahun Menu Card -->
            <div class="sidebar-card">
                <h4 class="sidebar-title">TAHUN</h4>
                <ul class="sidebar-nav-list">
                    <li class="sidebar-nav-item {{ !request('year') ? 'active' : '' }}">
                        <a href="{{ route('galeri') }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-calendar3"></i> Semua Tahun</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item {{ request('year') == '2024' ? 'active' : '' }}">
                        <a href="{{ route('galeri', ['year' => 2024]) }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-calendar-event"></i> 2024</span>
                            <span class="badge" style="background: rgba(0,0,0,0.06); font-size: 0.72rem;">52</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item {{ request('year') == '2023' ? 'active' : '' }}">
                        <a href="{{ route('galeri', ['year' => 2023]) }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-calendar-event"></i> 2023</span>
                            <span class="badge" style="background: rgba(0,0,0,0.06); font-size: 0.72rem;">41</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item {{ request('year') == '2022' ? 'active' : '' }}">
                        <a href="{{ route('galeri', ['year' => 2022]) }}" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-calendar-event"></i> 2022</span>
                            <span class="badge" style="background: rgba(0,0,0,0.06); font-size: 0.72rem;">21</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#" style="display: flex; justify-content: space-between; align-items: center;">
                            <span><i class="bi bi-calendar-event"></i> Sebelumnya</span>
                            <span class="badge" style="background: rgba(0,0,0,0.06); font-size: 0.72rem;">10</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Falsafah Quote Box -->
            <div class="quote-box">
                <div class="quote-icon"><i class="bi bi-quote"></i></div>
                <div class="quote-text">
                    "Somba marhula-hula, elek marboru, manat mardongan tubu."
                </div>
                <div class="quote-author">– Falsafah Batak Toba</div>
            </div>
        </aside>

        <!-- CENTER MAIN CONTENT AREA -->
        <main class="main-content">
            <!-- Breadcrumb -->
            <div class="breadcrumb-bar">
                <a href="{{ route('home') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <span>Galeri</span>
            </div>

            <!-- Top Search & Sort Filter Row -->
            <form action="{{ route('galeri') }}" method="GET" style="display: flex; align-items: center; justify-content: space-between; gap: 1rem; margin-bottom: 1.5rem;">
                <div class="search-input-wrap" style="flex: 1;">
                    <i class="bi bi-search"></i>
                    <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari galeri...">
                </div>
                
                <select name="sort" class="sort-select" style="background: #FFFFFF; color: var(--parna-text-main); border: 1px solid var(--parna-border);" onchange="this.form.submit()">
                    <option value="latest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                </select>

                <button type="button" class="btn-outline-maroon" style="padding: 8px 16px; font-size: 0.82rem; gap: 6px;">
                    <i class="bi bi-grid-3x3-gap-fill"></i> Tampilan
                </button>
            </form>

            <!-- Gallery Cards Grid (4 Columns across / 2 Rows) -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 2rem;">
                @forelse($galeris as $galeri)
                    <div class="sidebar-card" style="padding: 0; overflow: hidden; margin: 0; display: flex; flex-direction: column; justify-content: space-between; transition: all 0.25s ease;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
                        <!-- Thumbnail Image -->
                        <div style="height: 140px; overflow: hidden; position: relative;">
                            <img src="{{ asset($galeri->thumbnail ?? 'images/batak_festival.jpg') }}" alt="{{ $galeri->title }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='/images/hero_toba.jpg'">
                        </div>

                        <!-- Card Body Info -->
                        <div style="padding: 12px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <h5 style="font-size: 0.88rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 6px; line-height: 1.3;">
                                    {{ $galeri->title }}
                                </h5>
                                <div style="display: flex; align-items: center; gap: 8px; font-size: 0.72rem; color: var(--parna-text-muted); margin-bottom: 8px;">
                                    <span><i class="bi bi-calendar3"></i> {{ optional($galeri->event_date)->format('d Mei Y') }}</span>
                                    @if($galeri->location)
                                        <span><i class="bi bi-geo-alt-fill" style="color: var(--parna-gold);"></i> {{ $galeri->location }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Bottom Photo Count Badge -->
                            <div style="display: flex; justify-content: flex-end; border-top: 1px solid var(--parna-border); padding-top: 8px;">
                                <span style="background: #FAF4EA; color: var(--parna-maroon); font-size: 0.7rem; font-weight: 700; padding: 3px 8px; border-radius: 4px; border: 1px solid var(--parna-gold-border); display: inline-flex; align-items: center; gap: 4px;">
                                    <i class="bi bi-images"></i> {{ $galeri->photo_count }} Foto
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 3rem 1rem;">
                        <i class="bi bi-images" style="font-size: 2.5rem; color: var(--parna-text-muted);"></i>
                        <h4 style="margin-top: 1rem; color: var(--parna-maroon);">Belum ada galeri ditemukan</h4>
                    </div>
                @endforelse
            </div>

            <!-- Bottom Load More Button -->
            <div style="text-align: center; margin-top: 2rem;">
                <button class="btn-outline-maroon" style="padding: 10px 30px;">
                    Muat Lebih Banyak <i class="bi bi-chevron-down"></i>
                </button>
            </div>
        </main>
    </div>
</div>
@endsection
