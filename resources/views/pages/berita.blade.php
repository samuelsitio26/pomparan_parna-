@extends('layouts.app')

@section('title', 'Berita & Kegiatan – Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/berita.css') }}">
@endsection

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner">
    <div class="subpage-banner-content">
        <h2>BERITA & KEGIATAN</h2>
        <p class="tagline">Informasi terbaru dan kegiatan Parsadaan Parna</p>
        <p class="desc">
            Ikuti perkembangan berita, kegiatan, dan informasi penting seputar Parsadaan Pomparan Ni Raja Nai Ambaton (Parna).
        </p>
    </div>
</section>

<!-- Main Container Layout (2-Column Layout Right) -->
<div class="layout-container">
    <div class="grid-2-col-right">
        <!-- MAIN CONTENT AREA -->
        <main class="main-content">
            <!-- BERITA TERKINI SECTION -->
            <h3 class="section-header-title">BERITA TERKINI</h3>

            <div class="news-featured-grid">
                @forelse($beritas->take(3) as $berita)
                    <div class="news-card">
                        <div class="news-img-wrap">
                            <div class="date-badge">
                                <strong>{{ optional($berita->event_date)->format('d') ?? '12' }}</strong><br>
                                <small>{{ optional($berita->event_date)->format('M Y') ?? 'Mei 2026' }}</small>
                            </div>
                            <img src="{{ asset('images/batak_festival.jpg') }}" alt="{{ $berita->title }}" onerror="this.src='/images/hero_toba.jpg'">
                        </div>
                        <div class="news-body">
                            <h4 class="news-title">{{ $berita->title }}</h4>
                            <p class="news-desc">{{ Str::limit($berita->summary, 90) }}</p>
                            <a href="{{ route('berita.detail', $berita->slug) }}" class="news-link">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; padding: 2rem; text-align: center; color: var(--parna-text-muted);">
                        Belum ada berita terkini.
                    </div>
                @endforelse
            </div>

            <!-- KEGIATAN TERAKHIR SECTION -->
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.2rem;">
                <h3 class="section-header-title" style="margin: 0;">KEGIATAN TERAKHIR</h3>
                <a href="{{ route('berita') }}" class="btn-outline-maroon" style="padding: 6px 18px; font-size: 0.8rem;">
                    <i class="bi bi-grid-fill"></i> Lihat Semua Berita
                </a>
            </div>

            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 2rem;">
                <div class="sidebar-card" style="padding: 0; overflow: hidden; margin: 0;">
                    <div style="height: 110px; overflow: hidden;">
                        <img src="{{ asset('images/hero_toba.jpg') }}" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div style="padding: 10px;">
                        <h5 style="font-size: 0.82rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 4px;">Gotong Royong Marga Parna</h5>
                        <p style="font-size: 0.72rem; color: var(--parna-text-muted);">21 April 2026</p>
                    </div>
                </div>

                <div class="sidebar-card" style="padding: 0; overflow: hidden; margin: 0;">
                    <div style="height: 110px; overflow: hidden;">
                        <img src="{{ asset('images/batak_festival.jpg') }}" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div style="padding: 10px;">
                        <h5 style="font-size: 0.82rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 4px;">Seminar Adat & Budaya Batak</h5>
                        <p style="font-size: 0.72rem; color: var(--parna-text-muted);">05 April 2026</p>
                    </div>
                </div>

                <div class="sidebar-card" style="padding: 0; overflow: hidden; margin: 0;">
                    <div style="height: 110px; overflow: hidden;">
                        <img src="{{ asset('images/hero_toba.jpg') }}" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div style="padding: 10px;">
                        <h5 style="font-size: 0.82rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 4px;">Turnamen Olahraga Parna Cup</h5>
                        <p style="font-size: 0.72rem; color: var(--parna-text-muted);">24 Maret 2026</p>
                    </div>
                </div>

                <div class="sidebar-card" style="padding: 0; overflow: hidden; margin: 0;">
                    <div style="height: 110px; overflow: hidden;">
                        <img src="{{ asset('images/batak_festival.jpg') }}" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div style="padding: 10px;">
                        <h5 style="font-size: 0.82rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 4px;">Aksi Donor Darah Parna</h5>
                        <p style="font-size: 0.72rem; color: var(--parna-text-muted);">10 Maret 2026</p>
                    </div>
                </div>
            </div>
        </main>

        <!-- RIGHT SIDEBAR (KALENDER & KEGIATAN MENDATANG) -->
        <aside class="sidebar-right">
            <!-- Kalender Widget -->
            <div class="calendar-widget">
                <div class="calendar-header">
                    <span><i class="bi bi-chevron-left"></i></span>
                    <span>Mei 2026</span>
                    <span><i class="bi bi-chevron-right"></i></span>
                </div>
                <div class="calendar-grid">
                    <div class="cal-day-head">Sen</div>
                    <div class="cal-day-head">Sel</div>
                    <div class="cal-day-head">Rab</div>
                    <div class="cal-day-head">Kam</div>
                    <div class="cal-day-head">Jum</div>
                    <div class="cal-day-head">Sab</div>
                    <div class="cal-day-head">Min</div>

                    <div class="cal-date" style="opacity: 0.4;">29</div>
                    <div class="cal-date" style="opacity: 0.4;">30</div>
                    <div class="cal-date">1</div>
                    <div class="cal-date">2</div>
                    <div class="cal-date">3</div>
                    <div class="cal-date">4</div>
                    <div class="cal-date">5</div>
                    <div class="cal-date">6</div>
                    <div class="cal-date">7</div>
                    <div class="cal-date">8</div>
                    <div class="cal-date">9</div>
                    <div class="cal-date">10</div>
                    <div class="cal-date">11</div>
                    <div class="cal-date active">12</div>
                    <div class="cal-date">13</div>
                    <div class="cal-date">14</div>
                    <div class="cal-date event">15</div>
                    <div class="cal-date">16</div>
                    <div class="cal-date">17</div>
                    <div class="cal-date">18</div>
                    <div class="cal-date">19</div>
                    <div class="cal-date">20</div>
                    <div class="cal-date">21</div>
                    <div class="cal-date">22</div>
                    <div class="cal-date">23</div>
                    <div class="cal-date">24</div>
                    <div class="cal-date">25</div>
                    <div class="cal-date">26</div>
                    <div class="cal-date">27</div>
                    <div class="cal-date">28</div>
                    <div class="cal-date">29</div>
                    <div class="cal-date">30</div>
                    <div class="cal-date">31</div>
                </div>
            </div>

            <!-- Kegiatan Mendatang Widget -->
            <div class="sidebar-card">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem; border-bottom: 2px solid var(--parna-gold-border); padding-bottom: 6px;">
                    <h4 class="sidebar-title" style="border-bottom: none; margin: 0; padding: 0;">KEGIATAN MENDATANG</h4>
                    <a href="#" style="font-size: 0.75rem; color: var(--parna-maroon); font-weight: 700;">Lihat Semua</a>
                </div>

                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <div style="display: flex; align-items: center; gap: 12px; padding-bottom: 10px; border-bottom: 1px solid var(--parna-border);">
                        <div style="background: var(--parna-maroon); color: #FFFFFF; padding: 6px 10px; border-radius: 6px; text-align: center; font-size: 0.75rem; font-weight: 700; flex-shrink: 0; width: 48px;">
                            15<br><small style="font-weight: 400;">Jun</small>
                        </div>
                        <div style="flex: 1;">
                            <h5 style="font-size: 0.85rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 2px;">Musyawarah Wilayah Parna</h5>
                            <p style="font-size: 0.74rem; color: var(--parna-text-muted); margin: 0;"><i class="bi bi-geo-alt-fill" style="color: var(--parna-gold);"></i> Medan, Sumatera Utara</p>
                        </div>
                        <i class="bi bi-chevron-right" style="color: var(--parna-text-muted); font-size: 0.8rem;"></i>
                    </div>

                    <div style="display: flex; align-items: center; gap: 12px; padding-bottom: 10px; border-bottom: 1px solid var(--parna-border);">
                        <div style="background: var(--parna-maroon); color: #FFFFFF; padding: 6px 10px; border-radius: 6px; text-align: center; font-size: 0.75rem; font-weight: 700; flex-shrink: 0; width: 48px;">
                            20<br><small style="font-weight: 400;">Jul</small>
                        </div>
                        <div style="flex: 1;">
                            <h5 style="font-size: 0.85rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 2px;">Pesta Pomparan Parna 2026</h5>
                            <p style="font-size: 0.74rem; color: var(--parna-text-muted); margin: 0;"><i class="bi bi-geo-alt-fill" style="color: var(--parna-gold);"></i> Samosir, Sumatera Utara</p>
                        </div>
                        <i class="bi bi-chevron-right" style="color: var(--parna-text-muted); font-size: 0.8rem;"></i>
                    </div>

                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="background: var(--parna-maroon); color: #FFFFFF; padding: 6px 10px; border-radius: 6px; text-align: center; font-size: 0.75rem; font-weight: 700; flex-shrink: 0; width: 48px;">
                            17<br><small style="font-weight: 400;">Agu</small>
                        </div>
                        <div style="flex: 1;">
                            <h5 style="font-size: 0.85rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 2px;">Seminar Adat & Budaya</h5>
                            <p style="font-size: 0.74rem; color: var(--parna-text-muted); margin: 0;"><i class="bi bi-geo-alt-fill" style="color: var(--parna-gold);"></i> Balige, Sumatera Utara</p>
                        </div>
                        <i class="bi bi-chevron-right" style="color: var(--parna-text-muted); font-size: 0.8rem;"></i>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
@endsection
