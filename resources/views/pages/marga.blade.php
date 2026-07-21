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

<!-- Main Container Layout -->
<div class="layout-container">
    <div class="grid-3-col">
        <!-- LEFT SIDEBAR -->
        <aside class="sidebar-left">
            <!-- Navigation Menu Card -->
            <div class="sidebar-card">
                <h4 class="sidebar-title">DAFTAR MARGA</h4>
                <ul class="sidebar-nav-list">
                    <li class="sidebar-nav-item active">
                        <a href="#"><i class="bi bi-grid-fill"></i> Semua Marga</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-sort-alpha-down"></i> Daftar Marga (A-Z)</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-diagram-2-fill"></i> Berdasarkan Cabang</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-geo-alt-fill"></i> Peta Persebaran</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-bar-chart-line-fill"></i> Statistik Marga</a>
                    </li>
                </ul>
            </div>

            <!-- Info Submenu -->
            <div class="sidebar-card">
                <h4 class="sidebar-title">INFORMASI</h4>
                <ul class="sidebar-nav-list">
                    <li class="sidebar-nav-item"><a href="{{ url('/tentang-parna') }}"><i class="bi bi-question-circle-fill"></i> Apa itu Parna?</a></li>
                    <li class="sidebar-nav-item"><a href="#"><i class="bi bi-shield-check"></i> Aturan Adat Parna</a></li>
                    <li class="sidebar-nav-item"><a href="#"><i class="bi bi-patch-question-fill"></i> Tanya Jawab</a></li>
                </ul>
            </div>

            <!-- Stats Box -->
            <div class="sidebar-card" style="background: var(--parna-bg-alt);">
                <div style="display: flex; align-items: center; gap: 12px;">
                    <div style="width: 44px; height: 44px; background: var(--parna-maroon); color: var(--parna-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div>
                        <p style="font-size: 0.72rem; font-weight: 700; color: var(--parna-text-muted); text-transform: uppercase;">JUMLAH MARGA</p>
                        <h3 style="font-size: 1.4rem; font-weight: 800; color: var(--parna-maroon); line-height: 1;">58+</h3>
                        <p style="font-size: 0.72rem; color: var(--parna-text-muted);">Marga dalam Parna</p>
                    </div>
                </div>
            </div>

            <!-- Quote Box -->
            <div class="quote-box">
                <div class="quote-icon"><i class="bi bi-quote"></i></div>
                <p class="quote-text">
                    "Somba marhula-hula, elelek marboru, manat mardongan tubu."
                </p>
                <span class="quote-author">– Falsafah Batak Toba</span>
            </div>
        </aside>

        <!-- CENTER MAIN CONTENT -->
        <main class="main-content">
            <!-- Breadcrumb -->
            <div class="breadcrumb-bar">
                <a href="{{ url('/') }}">Beranda</a> <i class="bi bi-chevron-right"></i> <span>Marga Parna</span>
            </div>

            <!-- Notice Box -->
            <div class="notice-box">
                <div class="notice-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="notice-content">
                    <p>
                        <strong>Parna menaungi lebih dari 58 marga</strong> yang berasal dari satu leluhur, Raja Nai Ambaton (Tuan Sorba Di Julu). Sesama Pomparan Raja Nai Ambaton (Parna) tidak diperbolehkan menikah menurut adat Batak Toba.
                    </p>
                </div>
            </div>

            <!-- Filter & Search Bar -->
            <div class="marga-filter-bar">
                <div class="search-input-wrap">
                    <i class="bi bi-search"></i>
                    <input type="text" id="margaSearchInput" placeholder="Cari marga..." onkeyup="filterMargaCards()">
                </div>
                <select class="sort-select" onchange="sortMargaCards(this.value)">
                    <option value="asc">Urutkan: A - Z</option>
                    <option value="desc">Urutkan: Z - A</option>
                    <option value="cabang">Urutkan Cabang</option>
                </select>
            </div>

            <!-- Section Title -->
            <h3 class="section-header-title">DAFTAR MARGA PARNA</h3>

            <!-- Grid 58 Marga Cards -->
            <div class="marga-grid" id="margaGridContainer">
                @php
                    $margas = [
                        ['id' => 1, 'name' => 'Sitio', 'cabang' => 'Cabang Sitio'],
                        ['id' => 2, 'name' => 'Sidabutar', 'cabang' => 'Cabang Sidabutar'],
                        ['id' => 3, 'name' => 'Turnip', 'cabang' => 'Cabang Turnip'],
                        ['id' => 4, 'name' => 'Siallagan', 'cabang' => 'Cabang Siallagan'],
                        ['id' => 5, 'name' => 'Rumahorbo', 'cabang' => 'Cabang Rumahorbo'],
                        ['id' => 6, 'name' => 'Napitu', 'cabang' => 'Cabang Napitu'],
                        ['id' => 7, 'name' => 'Simbolon', 'cabang' => 'Cabang Simbolon'],
                        ['id' => 8, 'name' => 'Tinambunan', 'cabang' => 'Cabang Tinambunan'],
                        ['id' => 9, 'name' => 'Tumanggor', 'cabang' => 'Cabang Tumanggor'],
                        ['id' => 10, 'name' => 'Saragi', 'cabang' => 'Cabang Saragi'],
                        ['id' => 11, 'name' => 'Simarmata', 'cabang' => 'Cabang Simarmata'],
                        ['id' => 12, 'name' => 'Nadeak', 'cabang' => 'Cabang Nadeak'],
                        ['id' => 13, 'name' => 'Sigalingging', 'cabang' => 'Cabang Sigalingging'],
                        ['id' => 14, 'name' => 'Sitanggang', 'cabang' => 'Cabang Sitanggang'],
                        ['id' => 15, 'name' => 'Pangaribuan', 'cabang' => 'Cabang Pangaribuan'],
                        ['id' => 16, 'name' => 'Manurung', 'cabang' => 'Cabang Manurung'],
                        ['id' => 17, 'name' => 'Hutabarat', 'cabang' => 'Cabang Hutabarat'],
                        ['id' => 18, 'name' => 'Siagian', 'cabang' => 'Cabang Siagian'],
                        ['id' => 19, 'name' => 'Lumbantobing', 'cabang' => 'Cabang Lumbantobing'],
                        ['id' => 20, 'name' => 'Naibaho', 'cabang' => 'Cabang Naibaho'],
                        ['id' => 21, 'name' => 'Sitorus', 'cabang' => 'Cabang Sitorus'],
                        ['id' => 22, 'name' => 'Gultom', 'cabang' => 'Cabang Gultom'],
                        ['id' => 23, 'name' => 'Purba', 'cabang' => 'Cabang Purba'],
                        ['id' => 24, 'name' => 'Silaban', 'cabang' => 'Cabang Silaban'],
                        ['id' => 25, 'name' => 'Munthe', 'cabang' => 'Cabang Munthe'],
                        ['id' => 26, 'name' => 'Sinambela', 'cabang' => 'Cabang Sinambela'],
                        ['id' => 27, 'name' => 'Pardede', 'cabang' => 'Cabang Pardede'],
                        ['id' => 28, 'name' => 'Butarbutar', 'cabang' => 'Cabang Butarbutar'],
                        ['id' => 29, 'name' => 'Panggabean', 'cabang' => 'Cabang Panggabean'],
                        ['id' => 30, 'name' => 'Tarihoran', 'cabang' => 'Cabang Tarihoran'],
                    ];
                @endphp

                @foreach($margas as $m)
                <div class="marga-card" data-name="{{ strtolower($m['name']) }}">
                    <div class="marga-card-icon">
                        <i class="bi bi-shield-shaded"></i>
                    </div>
                    <div class="marga-card-info">
                        <h4>{{ $m['id'] }}. {{ $m['name'] }}</h4>
                        <p>{{ $m['cabang'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- View All Button -->
            <div style="text-align: center; margin-top: 1.5rem;">
                <button class="btn-outline-maroon" style="padding: 10px 30px;">
                    Lihat Semua Marga (58+) <i class="bi bi-chevron-down"></i>
                </button>
            </div>
        </main>

        <!-- RIGHT SIDEBAR -->
        <aside class="sidebar-right">
            <div class="sidebar-card">
                <h4 class="sidebar-title">FAKTA PARNA</h4>
                <div style="display: flex; flex-direction: column; gap: 4px;">
                    <div class="fact-item">
                        <div class="fact-icon"><i class="bi bi-person-fill"></i></div>
                        <div class="fact-info">
                            <h5>1 Leluhur</h5>
                            <p>Raja Nai Ambaton (Tuan Sorba Di Julu)</p>
                        </div>
                    </div>
                    <div class="fact-item">
                        <div class="fact-icon"><i class="bi bi-shield-fill-check"></i></div>
                        <div class="fact-info">
                            <h5>58+ Marga</h5>
                            <p>Tergabung dalam Parsadaan Parna</p>
                        </div>
                    </div>
                    <div class="fact-item">
                        <div class="fact-icon"><i class="bi bi-globe"></i></div>
                        <div class="fact-info">
                            <h5>Ribuan Keluarga</h5>
                            <p>Tersebar di Indonesia & Dunia</p>
                        </div>
                    </div>
                    <div class="fact-item">
                        <div class="fact-icon"><i class="bi bi-suit-heart-fill"></i></div>
                        <div class="fact-info">
                            <h5>Satu Adat</h5>
                            <p>Dalihan Na Tolu, Adat & Budaya</p>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 1.5rem;">
                    <a href="{{ url('/tarombo') }}" class="btn-primary-maroon btn-block">
                        <i class="bi bi-diagram-3-fill"></i> Lihat Tarombo Parna
                    </a>
                </div>
            </div>
        </aside>
    </div>
</div>
@endsection

@section('scripts')
<script>
function filterMargaCards() {
    const input = document.getElementById('margaSearchInput').value.toLowerCase();
    const cards = document.querySelectorAll('.marga-card');
    cards.forEach(card => {
        const name = card.getAttribute('data-name');
        if (name.includes(input)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>
@endsection
