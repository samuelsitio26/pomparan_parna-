@extends('layouts.app')

@section('title', 'Marga Parna – Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/marga.css') }}">
@endsection

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner">
    <div class="subpage-banner-content">
        <h2>MARGA PARNA</h2>
        <p class="tagline">Daftar Marga dalam Parsadaan Pomparan Ni Raja Nai Ambaton</p>
        <p class="desc">
            Berikut adalah marga-marga yang tergabung dalam Parna, keturunan Raja Nai Ambaton (Tuan Sorba Di Julu).
        </p>
    </div>
</section>

<!-- Main Container Layout (3 Columns Layout) -->
<div class="layout-container">
    <div class="grid-3-col">
        <!-- LEFT SIDEBAR -->
        <aside class="sidebar-left">
            <!-- Navigation Menu Card -->
            <div class="sidebar-card">
                <h4 class="sidebar-title">DAFTAR MARGA</h4>
                <ul class="sidebar-nav-list">
                    <li class="sidebar-nav-item active">
                        <a href="{{ route('marga') }}"><i class="bi bi-grid-fill"></i> Semua Marga</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-sort-alpha-down"></i> Daftar Marga (A-Z)</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-diagram-2"></i> Berdasarkan Cabang</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-map-fill"></i> Peta Persebaran</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-bar-chart-fill"></i> Statistik Marga</a>
                    </li>
                </ul>
            </div>

            <!-- Info Menu Card -->
            <div class="sidebar-card">
                <h4 class="sidebar-title">INFORMASI</h4>
                <ul class="sidebar-nav-list">
                    <li class="sidebar-nav-item">
                        <a href="{{ route('tentang') }}"><i class="bi bi-question-circle-fill"></i> Apa itu Parna?</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-book-fill"></i> Aturan Adat Parna</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-patch-question-fill"></i> Tanya Jawab</a>
                    </li>
                </ul>
            </div>

            <!-- Marga Count Box -->
            <div class="sidebar-card" style="background: #FAF6F0; border-color: var(--parna-gold-border); text-align: center;">
                <div style="display: flex; align-items: center; justify-content: center; gap: 12px; margin-bottom: 6px;">
                    <div style="width: 44px; height: 44px; background: var(--parna-maroon); color: var(--parna-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div style="text-align: left;">
                        <span style="font-size: 0.65rem; font-weight: 700; color: var(--parna-text-muted); letter-spacing: 0.8px; text-transform: uppercase;">JUMLAH MARGA</span>
                        <h4 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 800; color: var(--parna-maroon); margin: 0;">{{ $margas->count() }}+</h4>
                        <p style="font-size: 0.72rem; color: var(--parna-text-muted); margin: 0;">Marga dalam Parna</p>
                    </div>
                </div>
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

        <!-- CENTER MAIN CONTENT -->
        <main class="main-content">
            <!-- Breadcrumb Bar -->
            <div class="breadcrumb-bar">
                <a href="{{ route('home') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <span>Marga Parna</span>
            </div>

            <!-- Notice Box -->
            <div class="notice-box">
                <div class="notice-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="notice-content">
                    <p>
                        Parna menaungi lebih dari <strong>{{ $margas->count() }} marga</strong> yang berasal dari satu leluhur, <strong>Raja Nai Ambaton (Tuan Sorba Di Julu)</strong>. Sesama Pomparan Raja Nai Ambaton (Parna) tidak diperbolehkan menikah menurut adat Batak Toba.
                    </p>
                </div>
            </div>

            <!-- Filter & Search Bar -->
            <form action="{{ route('marga') }}" method="GET" class="marga-filter-bar">
                <div class="search-input-wrap">
                    <i class="bi bi-search"></i>
                    <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari marga...">
                </div>
                <select name="branch" class="sort-select" onchange="this.form.submit()">
                    <option value="">-- Urutkan --</option>
                    @foreach($branches as $branch)
                        <option value="{{ $branch }}" {{ request('branch') == $branch ? 'selected' : '' }}>{{ $branch }}</option>
                    @endforeach
                </select>
            </form>

            <!-- Section Title -->
            <h3 class="section-header-title">DAFTAR MARGA PARNA</h3>

            <!-- Marga Grid (Data Dinamis DB) -->
            <div class="marga-grid">
                @forelse($margas as $index => $marga)
                    <div class="marga-card">
                        <div class="marga-card-icon">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div class="marga-card-info">
                            <h4>{{ $index + 1 }}. {{ $marga->name }}</h4>
                            <p>Cabang {{ $marga->branch_group }}</p>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 3rem 1rem;">
                        <i class="bi bi-search" style="font-size: 2.5rem; color: var(--parna-text-muted);"></i>
                        <h4 style="margin-top: 1rem; color: var(--parna-maroon);">Marga tidak ditemukan</h4>
                        <p style="color: var(--parna-text-muted); font-size: 0.88rem;">Coba gunakan kata kunci pencarian yang lain.</p>
                    </div>
                @endforelse
            </div>

            <!-- Bottom Load More Button -->
            <div style="text-align: center; margin-top: 2rem;">
                <button class="btn-outline-maroon" style="padding: 10px 30px;">
                    Lihat Semua Marga ({{ $margas->count() }}+) <i class="bi bi-chevron-down"></i>
                </button>
            </div>
        </main>

        <!-- RIGHT SIDEBAR (FAKTA PARNA) -->
        <aside class="sidebar-right">
            <div class="sidebar-card">
                <h4 class="sidebar-title">FAKTA PARNA</h4>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                    <div class="fact-info">
                        <h5>1 Leluhur</h5>
                        <p>Raja Nai Ambaton (Tuan Sorba Di Julu)</p>
                    </div>
                </div>

                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="fact-info">
                        <h5>{{ $margas->count() }}+ Marga</h5>
                        <p>Tergabung dalam Parsadaan Parna</p>
                    </div>
                </div>

                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="bi bi-globe-asia-australia"></i>
                    </div>
                    <div class="fact-info">
                        <h5>Ribuan Keluarga</h5>
                        <p>Tersebar di Indonesia & Dunia</p>
                    </div>
                </div>

                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <div class="fact-info">
                        <h5>Satu Adat</h5>
                        <p>Dalihan Na Tolu, Adat & Budaya</p>
                    </div>
                </div>

                <div style="margin-top: 1.5rem;">
                    <a href="{{ route('tarombo') }}" class="btn-primary-maroon btn-block">
                        <i class="bi bi-diagram-3-fill"></i> Lihat Tarombo Parna
                    </a>
                </div>
            </div>
        </aside>
    </div>
</div>
@endsection
