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
                        <a href="#"><i class="bi bi-person-badge-fill"></i> Sejarah Parna</a>
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
                        <a href="#"><i class="bi bi-book-fill"></i> Aturan Adat</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-shield-shaded"></i> Simbol & Makna</a>
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

        <!-- CENTER MAIN CONTENT -->
        <main class="main-content">
            <!-- SEJARAH PARNA SECTION -->
            <h3 class="section-header-title">
                <i class="bi bi-compass-fill" style="color: var(--parna-gold);"></i> SEJARAH PARNA
            </h3>

            <div class="tentang-content-box" style="display: flex; gap: 1.5rem; align-items: flex-start; margin-bottom: 1.5rem;">
                <div style="flex: 0 0 240px;">
                    <img src="{{ asset('images/batak_festival.jpg') }}" alt="Tokoh Adat Parna" style="width: 100%; border-radius: var(--parna-radius-md); border: 1px solid var(--parna-border); box-shadow: var(--parna-shadow-sm);" onerror="this.src='/images/hero_toba.png'">
                </div>
                <div style="flex: 1; font-size: 0.85rem; line-height: 1.6; color: var(--parna-text-main);">
                    <h4 style="font-size: 1.05rem; color: var(--parna-maroon); font-weight: 700; margin-bottom: 0.4rem;">Pengertian Parna</h4>
                    <p style="margin-bottom: 1rem;">
                        <strong>Parsadaan Pomparan Raja Nai Ambaton (Parna)</strong> adalah sebuah perkumpulan yang menghimpun keturunan Raja Nai Ambaton (Tuan Sorbadijulu), salah satu leluhur penting dalam silsilah Batak Toba. Nama Parna merupakan akronim dari Parsadaan Pomparan Raja Nai Ambaton.
                    </p>
                    <h4 style="font-size: 1.05rem; color: var(--parna-maroon); font-weight: 700; margin-bottom: 0.4rem;">Silsilah Singkat</h4>
                    <p style="margin-bottom: 0.5rem;">
                        Dalam silsilah Batak, terdapat dua garis keturunan utama, yaitu <strong>Guru Tatea Bulan</strong> dan <strong>Raja Isumbaon</strong>. Raja Isumbaon memiliki keturunan bernama Tuan Sorimangaraja, yang kemudian menikah dengan Si Boru Anting Sabungan, keturunan Guru Tatea Bulan.
                    </p>
                    <p>
                        Dari pernikahan tersebut lahirlah Tuan Sorbadijulu, yang kemudian dikenal dengan gelar Raja Nai Ambaton atau Datu Sindar Mataniari. Seluruh keturunan Raja Nai Ambaton inilah yang kemudian dikenal sebagai <strong>Pomparan Parna</strong>.
                    </p>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 2.5rem;">
                <div style="background: #FFFFFF; border: 1px solid var(--parna-border); border-radius: var(--parna-radius-md); padding: 1.2rem; box-shadow: var(--parna-shadow-sm);">
                    <h4 style="font-size: 0.95rem; color: var(--parna-maroon); font-weight: 700; margin-bottom: 0.6rem;"><i class="bi bi-geo-alt-fill" style="color: var(--parna-gold); margin-right: 4px;"></i> Persebaran Wilayah</h4>
                    <p style="font-size: 0.8rem; line-height: 1.5; color: var(--parna-text-muted); margin: 0;">
                        Wilayah awal penyebaran keturunan Raja Nai Ambaton berada di bagian barat hingga utara Pulau Samosir. Seiring waktu, Pomparan Parna menyebar ke berbagai daerah di Indonesia bahkan ke mancanegara, sambil tetap menjaga nilai-nilai adat, budaya, dan persaudaraan Batak Toba.
                    </p>
                </div>
                <div style="background: #FFFFFF; border: 1px solid var(--parna-border); border-radius: var(--parna-radius-md); padding: 1.2rem; box-shadow: var(--parna-shadow-sm);">
                    <h4 style="font-size: 0.95rem; color: var(--parna-maroon); font-weight: 700; margin-bottom: 0.6rem;"><i class="bi bi-diagram-3-fill" style="color: var(--parna-gold); margin-right: 4px;"></i> Marga-Marga Parna</h4>
                    <p style="font-size: 0.8rem; line-height: 1.5; color: var(--parna-text-muted); margin: 0; max-height: 80px; overflow-y: auto; padding-right: 0.3rem;">
                        <strong>Marga Batak Toba:</strong> Dajawak, Dalimunte, Damuntei, Garingging, Maharaja, Munte, Nadeak, Napitu, Pinayungan, Rumahorbo, Saing, Saragi, Sumbayak, Siadari, Siallagan, Siambaton, Sidabalok, Sidabutar, Sidauruk, Sigalingging, Sijabat, Simanihuruk, Simalango, Simarmata, Simbolon, Sitanggang, Sitio, Tamba, Tinambunan, Tumanggor, Turnip, Turutan.
                    </p>
                </div>
            </div>

            <!-- NILAI & PRINSIP PARNA SECTION -->
            <h3 class="section-header-title" style="margin-top: 2rem;">
                <i class="bi bi-star-fill" style="color: var(--parna-gold);"></i> NILAI & PRINSIP PARNA
            </h3>

            <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 1rem; margin-bottom: 2.5rem;">
                <div style="background: #FFFFFF; border: 1px solid var(--parna-border); border-radius: var(--parna-radius-md); padding: 1.2rem; text-align: center; box-shadow: var(--parna-shadow-sm);">
                    <i class="bi bi-people-fill" style="font-size: 1.8rem; color: var(--parna-maroon); display: block; margin-bottom: 0.5rem;"></i>
                    <h5 style="font-size: 0.88rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 0.3rem;">Persaudaraan</h5>
                    <p style="font-size: 0.72rem; color: var(--parna-text-muted); line-height: 1.3;">Mempererat hubungan kekeluargaan antar pomparan Raja Nai Ambaton.</p>
                </div>

                <div style="background: #FFFFFF; border: 1px solid var(--parna-border); border-radius: var(--parna-radius-md); padding: 1.2rem; text-align: center; box-shadow: var(--parna-shadow-sm);">
                    <i class="bi bi-shield-fill-check" style="font-size: 1.8rem; color: var(--parna-maroon); display: block; margin-bottom: 0.5rem;"></i>
                    <h5 style="font-size: 0.88rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 0.3rem;">Pelestarian Adat</h5>
                    <p style="font-size: 0.72rem; color: var(--parna-text-muted); line-height: 1.3;">Menjaga dan melestarikan adat, budaya, serta nilai-nilai leluhur Batak Toba.</p>
                </div>

                <div style="background: #FFFFFF; border: 1px solid var(--parna-border); border-radius: var(--parna-radius-md); padding: 1.2rem; text-align: center; box-shadow: var(--parna-shadow-sm);">
                    <i class="bi bi-hand-thumbs-up-fill" style="font-size: 1.8rem; color: var(--parna-maroon); display: block; margin-bottom: 0.5rem;"></i>
                    <h5 style="font-size: 0.88rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 0.3rem;">Kebersamaan</h5>
                    <p style="font-size: 0.72rem; color: var(--parna-text-muted); line-height: 1.3;">Bersatu dalam suka dan duka, saling mendukung untuk kemajuan bersama.</p>
                </div>

                <div style="background: #FFFFFF; border: 1px solid var(--parna-border); border-radius: var(--parna-radius-md); padding: 1.2rem; text-align: center; box-shadow: var(--parna-shadow-sm);">
                    <i class="bi bi-journal-bookmark-fill" style="font-size: 1.8rem; color: var(--parna-maroon); display: block; margin-bottom: 0.5rem;"></i>
                    <h5 style="font-size: 0.88rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 0.3rem;">Pendidikan & Generasi</h5>
                    <p style="font-size: 0.72rem; color: var(--parna-text-muted); line-height: 1.3;">Meningkatkan kualitas sumber daya manusia untuk generasi Parna yang lebih baik.</p>
                </div>

                <div style="background: #FFFFFF; border: 1px solid var(--parna-border); border-radius: var(--parna-radius-md); padding: 1.2rem; text-align: center; box-shadow: var(--parna-shadow-sm);">
                    <i class="bi bi-bank2" style="font-size: 1.8rem; color: var(--parna-maroon); display: block; margin-bottom: 0.5rem;"></i>
                    <h5 style="font-size: 0.88rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 0.3rem;">Kontribusi</h5>
                    <p style="font-size: 0.72rem; color: var(--parna-text-muted); line-height: 1.3;">Berperan aktif dalam pembangunan masyarakat, bangsa, dan negara.</p>
                </div>
            </div>

            <!-- TUJUAN PARNA SECTION -->
            <h3 class="section-header-title">
                <i class="bi bi-flag-fill" style="color: var(--parna-gold);"></i> TUJUAN PARNA
            </h3>

            <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 1rem;">
                <div style="background: #FFFBF3; border: 1px solid var(--parna-gold-border); border-radius: var(--parna-radius-md); padding: 1rem; text-align: center;">
                    <i class="bi bi-bullseye" style="font-size: 1.5rem; color: var(--parna-maroon); margin-bottom: 0.4rem; display: block;"></i>
                    <p style="font-size: 0.75rem; font-weight: 700; color: var(--parna-text-main);">Mempererat tali persaudaraan Pomparan Raja Nai Ambaton.</p>
                </div>
                <div style="background: #FFFBF3; border: 1px solid var(--parna-gold-border); border-radius: var(--parna-radius-md); padding: 1rem; text-align: center;">
                    <i class="bi bi-mortarboard-fill" style="font-size: 1.5rem; color: var(--parna-maroon); margin-bottom: 0.4rem; display: block;"></i>
                    <p style="font-size: 0.75rem; font-weight: 700; color: var(--parna-text-main);">Melestarikan adat istiadat, budaya, dan tarombo.</p>
                </div>
                <div style="background: #FFFBF3; border: 1px solid var(--parna-gold-border); border-radius: var(--parna-radius-md); padding: 1rem; text-align: center;">
                    <i class="bi bi-book-half" style="font-size: 1.5rem; color: var(--parna-maroon); margin-bottom: 0.4rem; display: block;"></i>
                    <p style="font-size: 0.75rem; font-weight: 700; color: var(--parna-text-main);">Meningkatkan pendidikan dan kesejahteraan pomparan.</p>
                </div>
                <div style="background: #FFFBF3; border: 1px solid var(--parna-gold-border); border-radius: var(--parna-radius-md); padding: 1rem; text-align: center;">
                    <i class="bi bi-chat-heart-fill" style="font-size: 1.5rem; color: var(--parna-maroon); margin-bottom: 0.4rem; display: block;"></i>
                    <p style="font-size: 0.75rem; font-weight: 700; color: var(--parna-text-main);">Menjadi wadah komunikasi, informasi, dan kolaborasi.</p>
                </div>
                <div style="background: #FFFBF3; border: 1px solid var(--parna-gold-border); border-radius: var(--parna-radius-md); padding: 1rem; text-align: center;">
                    <i class="bi bi-globe" style="font-size: 1.5rem; color: var(--parna-maroon); margin-bottom: 0.4rem; display: block;"></i>
                    <p style="font-size: 0.75rem; font-weight: 700; color: var(--parna-text-main);">Memberi kontribusi positif bagi masyarakat dan bangsa.</p>
                </div>
            </div>
        </main>

        <!-- RIGHT SIDEBAR (FAKTA PARNA) -->
        <aside class="sidebar-right">
            <div class="sidebar-card">
                <h4 class="sidebar-title">FAKTA PARNA</h4>
                
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="fact-info">
                        <h5>1 Leluhur</h5>
                        <p>Raja Nai Ambaton (Tuan Sorba Di Julu)</p>
                    </div>
                </div>

                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="fact-info">
                        <h5>{{ $margaCount }}+ Marga</h5>
                        <p>Tergabung dalam Parsadaan Parna</p>
                    </div>
                </div>

                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="bi bi-globe"></i>
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
                        <h5>Satu Ikatan</h5>
                        <p>Dalihan Na Tolu, Adat & Budaya</p>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
@endsection
