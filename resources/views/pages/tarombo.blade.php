@extends('layouts.app')

@section('title', 'Tarombo Parna – Silsilah Keturunan Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/tarombo.css') }}">
@endsection

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner">
    <div class="subpage-banner-content">
        <h2>TAROMBO PARNA</h2>
        <p class="tagline">SILSIALH KETURUNAN RAJA NAI AMBATON</p>
    </div>
</section>

<!-- Main Container Layout -->
<div class="layout-container">
    <div class="grid-3-col">
        <!-- LEFT SIDEBAR -->
        <aside class="sidebar-left">
            <div class="sidebar-card">
                <h4 class="sidebar-title">TAROMBO MENU</h4>
                <ul class="sidebar-nav-list">
                    <li class="sidebar-nav-item active">
                        <a href="#"><i class="bi bi-diagram-3-fill"></i> Tarombo Utama</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-diagram-2-fill"></i> Garis Keturunan</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="{{ url('/marga-parna') }}"><i class="bi bi-card-checklist"></i> Daftar Marga Parna</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-map-fill"></i> Peta Sebaran</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-book-half"></i> Panduan Adat</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-info-circle-fill"></i> Info & Sumber</a>
                    </li>
                </ul>
            </div>

            <!-- Did You Know Box -->
            <div class="sidebar-card" style="background: #FAF6F0; border-color: var(--parna-gold-border);">
                <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px; color:var(--parna-maroon); font-weight:700; font-size:0.88rem;">
                    <i class="bi bi-clock-history" style="font-size:1.1rem; color:var(--parna-gold);"></i> Tahukah Anda?
                </div>
                <p style="font-size: 0.78rem; color: var(--parna-text-muted); line-height: 1.4;">
                    Tarombo adalah silsilah yang menjadi pedoman adat dan identitas bagi seluruh pomparan Raja Nai Ambaton (Parna).
                </p>
            </div>
        </aside>

        <!-- CENTER MAIN CONTENT -->
        <main class="main-content">
            <!-- Breadcrumb -->
            <div class="breadcrumb-bar">
                <a href="{{ url('/') }}">Beranda</a> <i class="bi bi-chevron-right"></i> <a href="#">Tarombo</a> <i class="bi bi-chevron-right"></i> <span>Tarombo Utama</span>
            </div>

            <!-- TAROMBO TREE VIEW CONTAINER -->
            <div class="tarombo-tree-wrapper">
                <!-- Legend Row -->
                <div class="tarombo-legend">
                    <div class="legend-item">
                        <div class="legend-color main"></div> Garis Utama
                    </div>
                    <div class="legend-item">
                        <div class="legend-color second"></div> Generasi Lanjutan
                    </div>
                    <div class="legend-item">
                        <div class="legend-color branch"></div> Cabang Marga
                    </div>
                </div>

                <!-- Root Box Ancestor -->
                <div class="tree-root-box">
                    <div style="font-size: 1.2rem; color: var(--parna-gold); margin-bottom: 2px;"><i class="bi bi-award-fill"></i></div>
                    <h3>RAJA NAI AMBATON</h3>
                    <p>(TUAN SORBA DI JULU)</p>
                </div>

                <!-- Level 1 Siblings -->
                <div class="tree-level-1">
                    <div class="tree-node-sm">Tuan Sorba Dibanua</div>
                    <div class="tree-node-sm">Tuan Sorba Dijou</div>
                    <div class="tree-node-sm">Tuan Sorba Ditonga</div>
                    <div class="tree-node-sm">Tuan Sorba Dibagasan</div>
                    <div class="tree-node-sm">Tuan Sorba Dibarita</div>
                    <div class="tree-node-sm">Tuan Sorba Diboru</div>
                    <div class="tree-node-sm">Tuan Sorba Dibata</div>
                </div>

                <!-- Connector Line -->
                <div class="tree-vertical-connector"></div>

                <!-- Middle Direct Ancestors Chain -->
                <div class="tree-middle-chain">
                    <div class="tree-node-mid">Guru Tatea Bulan</div>
                    <div class="tree-vertical-connector" style="height:15px; margin:0;"></div>
                    <div class="tree-node-mid">Siboru Deak Parujar</div>
                    <div class="tree-vertical-connector" style="height:15px; margin:0;"></div>
                    <div class="tree-node-mid" style="background:#FAF0DD; border-color:var(--parna-maroon); font-weight:800;">
                        Tuan Sorba Di Julu (Raja Nai Ambaton)
                    </div>
                </div>

                <!-- Connector Line -->
                <div class="tree-vertical-connector"></div>

                <!-- 7 Branch Lineages Grid -->
                <div class="tree-branches-grid">
                    <!-- Branch 1 -->
                    <div class="branch-card">
                        <h5>1. Sitio</h5>
                        <ul>
                            <li>Sitio</li>
                            <li>Sidabutar</li>
                            <li>Turnip</li>
                            <li>Siallagan</li>
                            <li>Rumahorbo</li>
                            <li>Napitu</li>
                        </ul>
                    </div>

                    <!-- Branch 2 -->
                    <div class="branch-card">
                        <h5>2. Simbolon</h5>
                        <ul>
                            <li>Simbolon</li>
                            <li>Manurung</li>
                            <li>Panggabean</li>
                            <li>Hutabarat</li>
                        </ul>
                    </div>

                    <!-- Branch 3 -->
                    <div class="branch-card">
                        <h5>3. Tinambunan</h5>
                        <ul>
                            <li>Tinambunan</li>
                            <li>Tumanggor</li>
                            <li>Munthe</li>
                        </ul>
                    </div>

                    <!-- Branch 4 -->
                    <div class="branch-card">
                        <h5>4. Saragi</h5>
                        <ul>
                            <li>Saragi</li>
                            <li>Simarmata</li>
                            <li>Sinambela</li>
                        </ul>
                    </div>

                    <!-- Branch 5 -->
                    <div class="branch-card">
                        <h5>5. Nadeak</h5>
                        <ul>
                            <li>Nadeak</li>
                            <li>Pardede</li>
                            <li>Butarbutar</li>
                        </ul>
                    </div>

                    <!-- Branch 6 -->
                    <div class="branch-card">
                        <h5>6. Sigalingging</h5>
                        <ul>
                            <li>Sigalingging</li>
                            <li>Sitanggang</li>
                            <li>Silaban</li>
                        </ul>
                    </div>

                    <!-- Branch 7 -->
                    <div class="branch-card">
                        <h5>7. Lainnya</h5>
                        <ul>
                            <li>Naibaho</li>
                            <li>Lumbantobing</li>
                            <li>Sitorus</li>
                            <li>Gultom</li>
                            <li>Dan marga lainnya</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Notes Box -->
            <div style="background:#FFF8EE; border:1px solid #EEDBB9; border-radius:var(--parna-radius-sm); padding:10px 14px; display:flex; align-items:center; gap:10px; font-size:0.8rem; color:var(--parna-text-muted);">
                <i class="bi bi-info-circle-fill" style="color:var(--parna-maroon); font-size:1.1rem;"></i>
                <span><strong>Catatan:</strong> Tarombo ini adalah representasi garis besar. Detail lengkap dan variasi tarombo dapat berbeda menurut sumber dan wilayah.</span>
            </div>
        </main>

        <!-- RIGHT SIDEBAR -->
        <aside class="sidebar-right">
            <div class="sidebar-card">
                <h4 class="sidebar-title">TENTANG TAROMBO</h4>
                <p style="font-size: 0.82rem; color: var(--parna-text-muted); line-height: 1.4; margin-bottom: 1rem;">
                    Tarombo Parna menghubungkan kita dengan leluhur kita, Raja Nai Ambaton. Mengetahui tarombo berarti menjaga jati diri, adat, dan persaudaraan.
                </p>

                <div style="text-align: center; margin-bottom: 1.2rem;">
                    <img src="/images/batak_tree.png" alt="Pohon Tarombo" style="max-height: 120px; margin: 0 auto; opacity: 0.85;">
                </div>

                <div class="quote-box" style="margin-bottom: 1.2rem;">
                    <p class="quote-text">
                        "Somba marhula-hula, elelek marboru, manat mardongan tubu."
                    </p>
                </div>

                <div style="font-size: 0.78rem; color: var(--parna-text-main); display: flex; flex-direction: column; gap: 6px; margin-bottom: 1.2rem;">
                    <div style="display:flex; align-items:center; gap:6px;">
                        <i class="bi bi-crown-fill" style="color:var(--parna-gold);"></i> Raja / Leluhur Utama
                    </div>
                    <div style="display:flex; align-items:center; gap:6px;">
                        <i class="bi bi-diagram-2" style="color:#D4A359;"></i> Generasi Lanjutan
                    </div>
                    <div style="display:flex; align-items:center; gap:6px;">
                        <i class="bi bi-tree-fill" style="color:#4A8C80;"></i> Cabang Marga (Keturunan)
                    </div>
                </div>

                <button class="btn-primary-maroon btn-block" onclick="alert('Mengunduh dokumen PDF Tarombo Parna...')">
                    <i class="bi bi-download"></i> UNDUH TAROMBO (PDF)
                </button>
            </div>
        </aside>
    </div>
</div>
@endsection
