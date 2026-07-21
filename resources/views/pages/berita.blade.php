@extends('layouts.app')

@section('title', 'Berita & Kegiatan – Parsadaan Pomparan Ni Raja Nai Ambaton')

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

<!-- Main Container Layout -->
<div class="layout-container">
    <div class="grid-2-col-right">
        <!-- MAIN CONTENT AREA -->
        <main class="main-content">
            <!-- BERITA TERKINI SECTION -->
            <h3 class="section-header-title">BERITA TERKINI</h3>

            <div class="news-featured-grid">
                <!-- News Card 1 -->
                <div class="news-card">
                    <div class="news-img-wrap">
                        <img src="/images/batak_festival.jpg" alt="Pesta Parna 2024">
                        <div class="date-badge">12<br>Mei 2024</div>
                    </div>
                    <div class="news-body">
                        <h4 class="news-title">Pesta Pomparan Parna 2024 Berlangsung Meriah di Balige</h4>
                        <p class="news-desc">
                            Ribuan pomparan Parna dari berbagai wilayah hadir dalam pesta tahunan yang penuh kebersamaan dan sukacita.
                        </p>
                        <a href="#" class="news-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="news-card">
                    <div class="news-img-wrap">
                        <img src="/images/hero_toba.jpg" alt="Rapat Pengurus Pusat">
                        <div class="date-badge">28<br>Apr 2024</div>
                    </div>
                    <div class="news-body">
                        <h4 class="news-title">Rapat Pengurus Pusat Parna Bahas Program Kerja Tahun 2024</h4>
                        <p class="news-desc">
                            Pengurus pusat Parna menggelar rapat rutin untuk membahas program kerja dan penguatan organisasi.
                        </p>
                        <a href="#" class="news-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="news-card">
                    <div class="news-img-wrap">
                        <img src="/images/batak_festival.jpg" alt="Pelantikan Pengurus">
                        <div class="date-badge">10<br>Apr 2024</div>
                    </div>
                    <div class="news-body">
                        <h4 class="news-title">Pelantikan Pengurus Wilayah Parna Sumatera Utara Periode 2024-2027</h4>
                        <p class="news-desc">
                            Pengurus wilayah Parna Sumatera Utara resmi dilantik untuk masa bakti 2024-2027.
                        </p>
                        <a href="#" class="news-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- KEGIATAN TERAKHIR SECTION -->
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.2rem;">
                <h3 class="section-header-title" style="margin-bottom: 0;">KEGIATAN TERAKHIR</h3>
                <a href="#" class="btn-outline-maroon" style="padding: 6px 18px; font-size: 0.8rem;">
                    <i class="bi bi-grid-fill"></i> Lihat Semua Berita
                </a>
            </div>

            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 2rem;">
                <!-- Activity 1 -->
                <div style="background:#FFF; border:1px solid var(--parna-border); border-radius:var(--parna-radius-sm); overflow:hidden;">
                    <img src="/images/batak_festival.jpg" alt="Gotong Royong" style="height:100px; width:100%; object-fit:cover;">
                    <div style="padding:10px;">
                        <h5 style="font-size:0.8rem; font-weight:700; color:var(--parna-maroon); line-height:1.2; margin-bottom:4px;">Gotong Royong Marga Parna</h5>
                        <p style="font-size:0.7rem; color:var(--parna-text-muted);">21 April 2024</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div style="background:#FFF; border:1px solid var(--parna-border); border-radius:var(--parna-radius-sm); overflow:hidden;">
                    <img src="/images/hero_toba.jpg" alt="Seminar Adat" style="height:100px; width:100%; object-fit:cover;">
                    <div style="padding:10px;">
                        <h5 style="font-size:0.8rem; font-weight:700; color:var(--parna-maroon); line-height:1.2; margin-bottom:4px;">Seminar Adat & Budaya Batak</h5>
                        <p style="font-size:0.7rem; color:var(--parna-text-muted);">05 April 2024</p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div style="background:#FFF; border:1px solid var(--parna-border); border-radius:var(--parna-radius-sm); overflow:hidden;">
                    <img src="/images/batak_festival.jpg" alt="Turnamen Olahraga" style="height:100px; width:100%; object-fit:cover;">
                    <div style="padding:10px;">
                        <h5 style="font-size:0.8rem; font-weight:700; color:var(--parna-maroon); line-height:1.2; margin-bottom:4px;">Turnamen Olahraga Parna Cup</h5>
                        <p style="font-size:0.7rem; color:var(--parna-text-muted);">24 Maret 2024</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div style="background:#FFF; border:1px solid var(--parna-border); border-radius:var(--parna-radius-sm); overflow:hidden;">
                    <img src="/images/hero_toba.jpg" alt="Aksi Donor Darah" style="height:100px; width:100%; object-fit:cover;">
                    <div style="padding:10px;">
                        <h5 style="font-size:0.8rem; font-weight:700; color:var(--parna-maroon); line-height:1.2; margin-bottom:4px;">Aksi Donor Darah Parna</h5>
                        <p style="font-size:0.7rem; color:var(--parna-text-muted);">10 Maret 2024</p>
                    </div>
                </div>
            </div>
        </main>

        <!-- RIGHT SIDEBAR -->
        <aside class="sidebar-right">
            <!-- CALENDAR WIDGET -->
            <div class="calendar-widget">
                <div class="calendar-header">
                    <i class="bi bi-chevron-left"></i>
                    <span>Mei 2024</span>
                    <i class="bi bi-chevron-right"></i>
                </div>
                <div class="calendar-grid">
                    <div class="cal-day-head">Sen</div>
                    <div class="cal-day-head">Sel</div>
                    <div class="cal-day-head">Rab</div>
                    <div class="cal-day-head">Kam</div>
                    <div class="cal-day-head">Jum</div>
                    <div class="cal-day-head">Sab</div>
                    <div class="cal-day-head">Min</div>

                    <div class="cal-date" style="opacity:0.4;">29</div>
                    <div class="cal-date" style="opacity:0.4;">30</div>
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
                    <div class="cal-date" style="opacity:0.4;">1</div>
                    <div class="cal-date" style="opacity:0.4;">2</div>
                </div>
            </div>

            <!-- UPCOMING EVENTS LIST -->
            <div class="sidebar-card">
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1rem;">
                    <h4 class="sidebar-title" style="margin-bottom:0; border:none; padding:0;">KEGIATAN MENDATANG</h4>
                    <a href="#" style="font-size:0.75rem; color:var(--parna-maroon); font-weight:700;">Lihat Semua</a>
                </div>

                <div style="display:flex; flex-direction:column; gap:12px;">
                    <!-- Event 1 -->
                    <div style="background:#FAF8F5; border:1px solid var(--parna-border); border-radius:8px; padding:10px; display:flex; align-items:center; gap:10px;">
                        <div style="background:var(--parna-maroon); color:#FFF; padding:6px 10px; border-radius:6px; text-align:center; font-size:0.7rem; font-weight:700; line-height:1.2;">
                            15<br>Jun<br>2024
                        </div>
                        <div style="flex:1;">
                            <h5 style="font-size:0.82rem; font-weight:700; color:var(--parna-maroon); margin-bottom:2px;">Musyawarah Wilayah Parna Sumatera Utara</h5>
                            <p style="font-size:0.72rem; color:var(--parna-text-muted);"><i class="bi bi-geo-alt-fill" style="color:var(--parna-gold);"></i> Medan, Sumatera Utara</p>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div style="background:#FAF8F5; border:1px solid var(--parna-border); border-radius:8px; padding:10px; display:flex; align-items:center; gap:10px;">
                        <div style="background:var(--parna-maroon); color:#FFF; padding:6px 10px; border-radius:6px; text-align:center; font-size:0.7rem; font-weight:700; line-height:1.2;">
                            20<br>Jul<br>2024
                        </div>
                        <div style="flex:1;">
                            <h5 style="font-size:0.82rem; font-weight:700; color:var(--parna-maroon); margin-bottom:2px;">Pesta Pomparan Parna Tahun 2024</h5>
                            <p style="font-size:0.72rem; color:var(--parna-text-muted);"><i class="bi bi-geo-alt-fill" style="color:var(--parna-gold);"></i> Samosir, Sumatera Utara</p>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div style="background:#FAF8F5; border:1px solid var(--parna-border); border-radius:8px; padding:10px; display:flex; align-items:center; gap:10px;">
                        <div style="background:var(--parna-maroon); color:#FFF; padding:6px 10px; border-radius:6px; text-align:center; font-size:0.7rem; font-weight:700; line-height:1.2;">
                            17<br>Agu<br>2024
                        </div>
                        <div style="flex:1;">
                            <h5 style="font-size:0.82rem; font-weight:700; color:var(--parna-maroon); margin-bottom:2px;">Seminar Adat dan Budaya Batak Bersama Pomparan Parna</h5>
                            <p style="font-size:0.72rem; color:var(--parna-text-muted);"><i class="bi bi-geo-alt-fill" style="color:var(--parna-gold);"></i> Balige, Sumatera Utara</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
@endsection
