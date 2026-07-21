@extends('layouts.app')

@section('title', 'Tentang Parna – Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/tentang.css') }}">
@endsection

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner">
    <div class="subpage-banner-content">
        <h2>TENTANG PARNA</h2>
        <p class="tagline">Menyatakan Pomparan, Melestarikan Warisan Leluhur</p>
    </div>
</section>

<!-- Main Container Layout -->
<div class="layout-container">
    <div class="grid-3-col">
        <!-- LEFT SIDEBAR -->
        <aside class="sidebar-left">
            <div class="sidebar-card">
                <h4 class="sidebar-title">TENTANG PARNA</h4>
                <ul class="sidebar-nav-list">
                    <li class="sidebar-nav-item active">
                        <a href="#"><i class="bi bi-book-fill"></i> Sejarah Parna</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-eye-fill"></i> Visi & Misi</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-award-fill"></i> Nilai & Prinsip</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-diagram-3-fill"></i> Struktur Organisasi</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-bullseye"></i> Tujuan & Peran</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-shield-check"></i> Aturan Adat</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-flower1"></i> Simbol & Makna</a>
                    </li>
                </ul>
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
            <!-- SEJARAH PARNA SECTION -->
            <h3 class="section-header-title"><i class="bi bi-compass-fill" style="color:var(--parna-maroon);"></i> SEJARAH PARNA</h3>
            
            <div style="background: #FFFFFF; border: 1px solid var(--parna-border); border-radius: var(--parna-radius-md); padding: 1.5rem; margin-bottom: 2rem; box-shadow: var(--parna-shadow-sm);">
                <div style="display: grid; grid-template-columns: 220px 1fr; gap: 1.5rem; align-items: center;">
                    <div style="border-radius: 8px; overflow: hidden; border: 1px solid var(--parna-gold-border);">
                        <img src="/images/batak_festival.jpg" alt="Leluhur Batak" style="width: 100%; height: 180px; object-fit: cover; filter: sepia(0.3);">
                    </div>
                    <div style="font-size: 0.9rem; color: var(--parna-text-main); line-height: 1.6;">
                        <p style="margin-bottom: 0.8rem;">
                            <strong>Parna</strong> adalah singkatan dari <em>Parsadaan Pomparan Ni Raja Nai Ambaton (Tuan Sorba Di Julu)</em>. Parna merupakan persekutuan besar keturunan Raja Nai Ambaton yang terdiri dari berbagai marga. Ikatan ini lahir dari satu leluhur yang sama dan dipersatukan dalam semangat dalihan na tolu, persaudaraan, dan pelestarian adat istiadat Batak Toba.
                        </p>
                        <p>
                            Sejak dahulu, Pomparan Raja Nai Ambaton hidup berdampingan, saling mendukung, menjaga kehormatan leluhur, serta berperan aktif dalam kehidupan sosial, budaya, dan pembangunan masyarakat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- NILAI & PRINSIP PARNA SECTION -->
            <h3 class="section-header-title">NILAI & PRINSIP PARNA</h3>
            
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2rem;">
                <!-- Value 1 -->
                <div style="background:#FFF; border:1px solid var(--parna-border); border-radius:var(--parna-radius-md); padding:1rem; text-align:center;">
                    <div style="width:40px; height:40px; background:var(--parna-maroon); color:var(--parna-gold); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 8px auto; font-size:1.2rem;">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h5 style="font-size:0.88rem; font-weight:700; color:var(--parna-maroon); margin-bottom:4px;">Persaudaraan</h5>
                    <p style="font-size:0.75rem; color:var(--parna-text-muted);">Mempererat hubungan kekeluargaan antar pomparan Raja Nai Ambaton.</p>
                </div>
                <!-- Value 2 -->
                <div style="background:#FFF; border:1px solid var(--parna-border); border-radius:var(--parna-radius-md); padding:1rem; text-align:center;">
                    <div style="width:40px; height:40px; background:var(--parna-maroon); color:var(--parna-gold); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 8px auto; font-size:1.2rem;">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                    <h5 style="font-size:0.88rem; font-weight:700; color:var(--parna-maroon); margin-bottom:4px;">Pelestarian Adat</h5>
                    <p style="font-size:0.75rem; color:var(--parna-text-muted);">Menjaga dan melestarikan adat, budaya, serta nilai-nilai leluhur Batak Toba.</p>
                </div>
                <!-- Value 3 -->
                <div style="background:#FFF; border:1px solid var(--parna-border); border-radius:var(--parna-radius-md); padding:1rem; text-align:center;">
                    <div style="width:40px; height:40px; background:var(--parna-maroon); color:var(--parna-gold); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 8px auto; font-size:1.2rem;">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 style="font-size:0.88rem; font-weight:700; color:var(--parna-maroon); margin-bottom:4px;">Kebersamaan</h5>
                    <p style="font-size:0.75rem; color:var(--parna-text-muted);">Bersatu dalam suka dan duka, saling mendukung untuk kemajuan bersama.</p>
                </div>
                <!-- Value 4 -->
                <div style="background:#FFF; border:1px solid var(--parna-border); border-radius:var(--parna-radius-md); padding:1rem; text-align:center;">
                    <div style="width:40px; height:40px; background:var(--parna-maroon); color:var(--parna-gold); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 8px auto; font-size:1.2rem;">
                        <i class="bi bi-journal-bookmark-fill"></i>
                    </div>
                    <h5 style="font-size:0.88rem; font-weight:700; color:var(--parna-maroon); margin-bottom:4px;">Pendidikan & Generasi</h5>
                    <p style="font-size:0.75rem; color:var(--parna-text-muted);">Meningkatkan kualitas sumber daya manusia untuk generasi Parna yang lebih baik.</p>
                </div>
                <!-- Value 5 -->
                <div style="background:#FFF; border:1px solid var(--parna-border); border-radius:var(--parna-radius-md); padding:1rem; text-align:center;">
                    <div style="width:40px; height:40px; background:var(--parna-maroon); color:var(--parna-gold); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 8px auto; font-size:1.2rem;">
                        <i class="bi bi-bank2"></i>
                    </div>
                    <h5 style="font-size:0.88rem; font-weight:700; color:var(--parna-maroon); margin-bottom:4px;">Kontribusi</h5>
                    <p style="font-size:0.75rem; color:var(--parna-text-muted);">Berperan aktif dalam pembangunan masyarakat, bangsa, dan negara.</p>
                </div>
            </div>

            <!-- TUJUAN PARNA SECTION -->
            <h3 class="section-header-title">TUJUAN PARNA</h3>
            <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 8px;">
                <div style="background:#FAF8F5; border:1px solid var(--parna-border); border-radius:8px; padding:10px 6px; text-align:center; font-size:0.75rem; color:var(--parna-text-main);">
                    <i class="bi bi-bullseye" style="font-size:1.2rem; color:var(--parna-maroon); display:block; margin-bottom:4px;"></i>
                    Mempererat tali persaudaraan Pomparan Raja Nai Ambaton.
                </div>
                <div style="background:#FAF8F5; border:1px solid var(--parna-border); border-radius:8px; padding:10px 6px; text-align:center; font-size:0.75rem; color:var(--parna-text-main);">
                    <i class="bi bi-people" style="font-size:1.2rem; color:var(--parna-maroon); display:block; margin-bottom:4px;"></i>
                    Melestarikan adat istiadat, budaya, dan tarombo.
                </div>
                <div style="background:#FAF8F5; border:1px solid var(--parna-border); border-radius:8px; padding:10px 6px; text-align:center; font-size:0.75rem; color:var(--parna-text-main);">
                    <i class="bi bi-mortarboard" style="font-size:1.2rem; color:var(--parna-maroon); display:block; margin-bottom:4px;"></i>
                    Meningkatkan pendidikan dan kesejahteraan pomparan.
                </div>
                <div style="background:#FAF8F5; border:1px solid var(--parna-border); border-radius:8px; padding:10px 6px; text-align:center; font-size:0.75rem; color:var(--parna-text-main);">
                    <i class="bi bi-chat-heart" style="font-size:1.2rem; color:var(--parna-maroon); display:block; margin-bottom:4px;"></i>
                    Menjadi wadah komunikasi, informasi, dan kolaborasi.
                </div>
                <div style="background:#FAF8F5; border:1px solid var(--parna-border); border-radius:8px; padding:10px 6px; text-align:center; font-size:0.75rem; color:var(--parna-text-main);">
                    <i class="bi bi-globe2" style="font-size:1.2rem; color:var(--parna-maroon); display:block; margin-bottom:4px;"></i>
                    Memberi kontribusi positif bagi masyarakat dan bangsa.
                </div>
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
                            <h5>Satu Ikatan</h5>
                            <p>Dalihan Na Tolu, Adat & Budaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
@endsection
